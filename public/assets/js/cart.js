$(function(){
    $(document).on('submit', 'form#cartForm', function(e){
        e.preventDefault();
       let size = $(this).find('input.variation:checked').val();
       let product = $(this).data('product');
       let url = $(this).attr('action');
       let method = $(this).attr('method');
       let data = $(this).serialize();
       if(isNaN(size))
       {
            toastr.error('Size is required!');
       }
       else {
        $.ajax({
            url,
            method,
            data,
            success: function (res) {
                if (res.success) {
                    toastr.success(res.msg);
                    $("#product-modal").modal('hide');
                    if (res.item) {
                        $(document).find('span#cart_item_count').html(res.item);
                    }
                }else{
                    toastr.error(res.msg);
                }
               
            }
        });
       }
    });
});