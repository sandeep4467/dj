jQuery(document).ready(function ($) {

// Header Scroll fixed
  
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');

        }
    });
    if ($(window).scrollTop() > 0) {
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');

    }
// Header Scroll fixed End 

// Ebook Slider
    jQuery(".testimonial-slide").owlCarousel({
        nav: false,
        autoplay: true,
        loop: true,
        dots: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 768 up
            768: {
                items: 1
            }
        }
    });
});
