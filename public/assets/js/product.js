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
    })    
    
    $(document).on('change', '#upper', function(){
        $(document).find('input#two').val($(this).val());
    })
});