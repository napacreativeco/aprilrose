(function($) {

    $(document).ready(function() {
        AOS.init({
            duration: 1200
        });
        AOS.refresh();

        ScrollReveal({ reset: true });
        ScrollReveal().reveal('.scroll_it');
    });

    // NAVIGATION
    $('.hamburger').on('click', function() {
        $('.nav-overlay').show();
    });
    $('.close-btn').on('click', function() {
        $('.nav-overlay').fadeOut();
    });
    $('.close-txt').on('click', function() {
        $('.nav-overlay').fadeOut();
    });

    // Add Inc/Dec buttons to Quantity
    $('.quantity').prepend('<a onclick="dec()">-</a>');
    $('.quantity').append('<a onclick="inc()">+</a>');

    // Product Page Accordian
    $('.ingredients-link').on('click', function() {
        var theText = $('.ingredients-indicator').text();

        $('.ingredients').fadeToggle();
        if (theText == '+') {
            $('.ingredients-indicator').text('-');
        } else {
            $('.ingredients-indicator').text('+');
        }
        
    });

    $('.instructions-link').on('click', function() {
        var theText = $('.instructions-indicator').text();

        $('.instructions').fadeToggle();
        if (theText == '+') {
            $('.instructions-indicator').text('-');
        } else {
            $('.instructions-indicator').text('+');
        }
        
    });

    $('input.qty').on('change', function(){
            $("[name='update_cart']").trigger("click");

    });

    // Home - Line Items - Scroll
    var wit = $('.slide-container').scrollLeft();
   
    $('.scroll-right').on('click', function(event) {
        var wit = $('.slide-container').scrollLeft();
        wit = wit + 300;
        $('.slide-container').scrollLeft( wit );
        event.preventDefault();
        console.log(wit)
    });



})( jQuery );



// Cart Incrementation
function inc(event) {
    let number = document.querySelector('.qty');
    number.value = parseInt(number.value) + 1;
    event.preventDefault();
    var timeout;
}
function dec(event) {
    let number = document.querySelector('.qty');
    if (parseInt(number.value) > 0) {
        number.value = parseInt(number.value) - 1;
    }
    event.preventDefault();
}

