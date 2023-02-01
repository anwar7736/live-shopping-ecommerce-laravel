$(function(){
    //Add to cart
    $(document).on('submit', 'form#cartForm', function(e){
        e.preventDefault();
       let size = $(this).find('input.variation:checked').val();
       let product = $(this).find('input[name="product"]').val();
       let type = $(this).find('input[name="type"]').val();
       let url = $(this).attr('action');
       let method = $(this).attr('method');
       let data = $(this).serialize();
       if(type == 'variable' && isNaN(size))
       {
            toastr.error('Size is required!');
       }
       else {
            addToCart(url, method, data);
       }
    }); 
    
    //Cart item remove
    $(document).on('submit', 'form#cartRemoveForm', function(e){
        e.preventDefault();
        let div = $(this).closest('div').find('.cart-items');
        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();
        let record = $(this).closest('tr.cart-row');
        removeCartItem(url, method, data, record);
       
    });    
    
    $(document).on('submit', 'form#cartRemoveForm2', function(e){
        e.preventDefault();
        let div = $(this).closest('div.cart-items');
        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();
        removeCartItem(url, method, data, div);
       
    });

    function removeCartItem(url, method, data, record)
    {
        $.ajax({
            url,
            method,
            data,
            success: function (res) {
                if (res.success) 
                {
                    toastr.success(res.msg);
                    record.remove();
                    if (res.item) 
                    {
                        $(document).find('span#cart_item_count').html(res.item);
                    }
                    else{
                        $(document).find('span#cart_item_count').text(0);
                        $(document).find("#buy-to-cart").modal('hide');
                    }
                }else{
                    toastr.error(res.msg);
                }
               
            }
        });
    }
    
    //Cart item quantity update
    $(document).on('blur', '.cart_qty', function(){
        let quantity = $(this).val();
        let id = $(this).closest('div').find('input[name="cart_id"]').val();
        if(quantity > 10)
        {
            toastr.error('Quantity will not be greater than 10!');

        }
       else cartQtyUpdate(id, quantity);
    });  
    
    $(document).on('click', '.cart-qty-plus', function(){
        let quantity = $(this).closest('div').find('input.cart_qty');
        let id = $(this).closest('div').find('input[name="cart_id"]').val();
        if(quantity.val() >=10)
        {
            return;
        }
        let new_qty = Number(quantity.val()) + 1;
        quantity.val(new_qty);
        cartQtyUpdate(id, new_qty);
    });    
    
    $(document).on('click', '.cart-qty-minus', function(){
        let quantity = $(this).closest('div').find('input.cart_qty');
        let id = $(this).closest('div').find('input[name="cart_id"]').val();
        if(quantity.val() <=1)
        {
            return;
        }
        let new_qty = Number(quantity.val()) - 1;
        quantity.val(new_qty);
        cartQtyUpdate(id, new_qty);
    });
    
    $(document).on('change', '.cart_qty', function(){
        let quantity = $(this).val();
        let id = $(this).closest('div').find('input[name="cart_id"]').val();
        cartQtyUpdate(id, quantity);
    });

    function cartQtyUpdate(id, quantity)
    {
        calculateTotal();
       
                $.ajax({
                url: "cart/"+id+"/edit",
                method: "GET",
                data: {quantity},
                success: function (res) {
                    if (res.success) 
                    {
                        toastr.success(res.msg);
                    }else{
                        toastr.error(res.msg);
                    }
                
                }
            });
        
    }

    function calculateTotal()
    {
        $('table.cart_table').load(location.href+' table.cart_table');
        $('table.cart_summary').load(location.href+' table.cart_summary');
    }

    $(document).on('click', 'a.add_to_cart', function(e){
        e.preventDefault();
        let id = $(this).find('input[name="product"]').val();
        let url = "/cart";
        let method = "POST";
        const data = {product:id,qty:1, variation:'', token:$('meta[name="csrf-token"]').attr('content')};
        addToCart(url, method, data);

    })    

    function addToCart(url, method, data)
    {
        $.ajax({
            url,
            method,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data,
            success: function (res) {
                if (res.success) {
                    toastr.success(res.msg);
                    $("#product-modal").modal('hide');
                    $("#buy-to-cart").html(res.html).modal('show');
                    if (res.item) {
                        $(document).find('span#cart_item_count').html(res.item);
                    }
                }else{
                    toastr.error(res.msg);
                }
               
            }
        });
    }

    $(document).on('click', '.checkOutBtn', function(e){
        e.preventDefault();
        var count = $(document).find('span#cart_item_count').text();
        if(Number(count) <= 0)
        {
            toastr.error('Your cart is now empty!');
            return;
        }
        $.ajax({
            url: "/cart-items",
            method: "GET",
            success(res)
            {
                if(res.html)
                {
                    $("#buy-to-cart").html(res.html).modal('show');
                }
            }
        });
    });

    $(document).on('submit', 'form#checkoutForm', function(e){
        e.preventDefault();
        $(".submitBtn").attr('disabled', true);
        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();
        $.ajax({
            url,
            method,
            data, 
            success: function(res)
            {
                if (res.success) {
                    toastr.success(res.msg);
                    $("#buy-to-cart").modal('hide');
                    calculateTotal();
                    $(document).find('span#cart_item_count').text(0);
                }
                else
                {
                    $(".submitBtn").attr('disabled', false);
                    if(res.items)
                    {
                        for(let i = 0; i < res.items.length; i++)
                        {
                            $('strong.variation-section_'+res.items[i].product).find('span.stock-alert').removeClass('d-none').text(`Stock ${res.items[i].stock} pcs available!`);
                        }
                    }

                   if(res.msg)
                   {
                        toastr.error(res.msg);
                   }
                } 
            }
        })
    });

    $(document).on('change', '.variation', function(e){
        e.preventDefault();
        let product = $(this).data('product');
        let size = $(this).val();
        $.ajax({
            url: "/update-size",
            data:{product, size},
            method: "GET",
            success: function(res)
            {
                if(res.success)
                {
                    $('strong.variation-section_'+product).find('span.size-validation').addClass('d-none');
                    $('strong.variation-section_'+product).find('span.stock-alert').removeClass('d-none').text(`Stock ${res.stock} pcs available!`);
                    toastr.success(res.msg);
                }
                else{
                    toastr.error(res.msg);
                }
            }
        });
    })
    

});