$(function(){
    $(document).on('click', 'a.quick-view', function(e){
        e.preventDefault();
        let url = $(this).attr('href');
        $.ajax({
            url: url,
            method: "GET",
            success: function(res)
            {
                if(res.success)
                {
                    $('#product-modal').html(res.view).modal('show');
                }
                
            }
        });
    });

    $(document).on('change', '#lower', function(){
        $(document).find('input#one').val($(this).val());
        productFilter();
    });   
    
    $(document).on('change', '#upper', function(){
        $(document).find('input#two').val($(this).val());
        productFilter();
    });

    $(document).on('click', '.category_id', function(e){
        e.preventDefault();
        if( $(this).closest('li.category_item').hasClass('bg-warning'))
        {
            $(this).closest('li.category_item').removeClass('bg-warning');
        }
        else{
            $(this).closest('li.category_item').addClass('bg-warning');
        }
        productFilter();
        
    });

    $(document).on('click', '.color', function(e){
        e.preventDefault();
        if($(this).find('.color-bg').hasClass('selected-item'))
        {
            $(this).find('.color-bg').removeClass('selected-item');
        }
        else {
            $(this).find('.color-bg').addClass('selected-item');
        }
        productFilter();
        
    });    
    
    $(document).on('click', '.size', function(e){
        e.preventDefault();
        if($(this).find('div.product-items').hasClass('selected-item'))
        {
            $(this).find('div.product-items').removeClass('selected-item');
        }
        else {
            $(this).find('div.product-items').addClass('selected-item');
        }
        productFilter();

    });

    function productFilter()
    {
        let from = $(document).find('input#one').val();
        let to = $(document).find('input#two').val();
        const categories = $(document).find('li.bg-warning a').data('id');
        const colors = $('div.selected-item').closest('a.color').data('id');
        const sizes = $('div.selected-item').closest('a.size').data('id');

        $.ajax({
            url: '/shop-product-list',
            method: "GET",
            dataType: "JSON",
            data: {categories, colors, sizes, from, to},
            success: function(res)
            {
                if(res.html)
                {
                    $('.product_data').html(res.html);
                }
                
            }
        });
    }

    
});