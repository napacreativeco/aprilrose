(function($) {

    $('.hamburger').on('click', function() {
        $('.mobile-overlay').fadeIn();
    });
    $('.close').on('click', function() {
        $('.mobile-overlay').fadeOut();
    });

})( jQuery );

