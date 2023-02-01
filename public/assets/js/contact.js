$(function(){
    $(document).on('submit', 'form#contactForm', function(e){
        e.preventDefault();
        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let data = $(this).serialize();
        let button = $(this).closest('div').find('button[type="submit"]');
        $.ajax({
            url,
            method,
            data,
            beforeSend: function()
            {
                button.attr('disabled', true);
            },
            success: function(res)
            {
                if(res.success)
                {
                    button.attr('disabled', false);
                    toastr.success(res.msg);
                    $(document).find("form#contactForm").trigger("reset");
                }
            }
        })
    })
});