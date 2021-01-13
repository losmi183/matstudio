$( document ).ready(function() {
            
    $('.thumb img').click(function() {

        var src = $(this).attr('data-full');

        $('.img-wrapper img').attr('src', src);
    });

});