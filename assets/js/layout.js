import $ from 'jquery';
require('bootstrap');

$(document).ready(function () {
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
        $('#content').toggleClass('active');
    });

    // EXPERIENCE

    $('#experience-line').on('hover', function () {
        $('#content').css('background-color', rgba(0,0,0,0.5));
    });
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll > 5) {
        console.log('scroll');
        $('.home__bottom-img').addClass('active');
    } else {
        console.log('not scroll');
        $('.home__bottom-img').removeClass('active');
    }
});