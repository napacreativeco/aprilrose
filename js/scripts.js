(function($) {

    // NAVIGATION
    $('.hamburger').on('click', function() {
        $('.mobile-overlay').fadeIn();
    });
    $('.close').on('click', function() {
        $('.mobile-overlay').fadeOut();
    });

})( jQuery );

// Home - Line Items - Scroll
var rightBtn = document.querySelector('.scroll-right');

rightBtn.addEventListener("click", function(event) {
    const scrollBox = document.querySelector('.spotlight-slider');
    scrollBox.scrollLeft += 300;
    event.preventDefault();
});

