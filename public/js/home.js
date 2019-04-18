$(document).ready(function () {
    var screenHeight = $(window).height();

    /* init Jarallax with jQuery */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    });

    $('.carousel').carousel();

    // $("#owl-slide").owlCarousel({
    //     autoplay: false,
    //     autoplayTimeout: 5000,
    //     autoplayHoverPause: true,
    //     items: 3,
    //     itemsDesktop: [1199, 3],
    //     itemsDesktopSmall: [979, 3],
    //     itemsTablet: [768, 2],
    //     itemsMobile: [479, 1],
    //     lazyLoad: true,
    //     nav: true,
    //     dots: false,
    //     loop: true,
    //     margin: 20,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         479: {
    //             items: 1
    //         },
    //         768: {
    //             items: 2
    //         },
    //         979: {
    //             items: 3
    //         },
    //         1200: {
    //             items: 3
    //         }
    //     }
    // });

    $('.video-background').css({
        height: screenHeight
    })

});

$(window).bind("load", function () {
    // code here for fix issue video on mobile
    console.log('LOAD')
});