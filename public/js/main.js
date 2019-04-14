$(document).ready(function () {
    $('.carousel').carousel();

    $('#carouselColorCar').carousel();

    $("#owl-slide").owlCarousel({

        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        lazyLoad: true,
        nav: true,
        dots: false,
        loop: true,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 1
            },
            768: {
                items: 2
            },
            979: {
                items: 3
            },
            1200: {
                items: 3
            }
        }

    });

    // $("#owl-slide-interior").owlCarousel({

    //     autoplay: false,
    //     autoplayTimeout: 5000,
    //     autoplayHoverPause: true,
    //     items: 1,
    //     lazyLoad: true,
    //     nav: false,
    //     dots: false,
    //     loop: true,
    //     margin: 0,

    // });

    $('.slider').bxSlider({
        auto: true,
        pager: false,
        controls: false
    });

    $('.collapse-down').on('click', function(){
        $('#collapseSupport').collapse('hide')
    })

    var interiorPosSlide = $('.interior-slide').offset().top;
    var heightSlide = $('.interior-slide').innerHeight();
    var screenHeight = $(window).height();
    var edgeHeight = heightSlide - screenHeight;

    // console.log(interiorPosSlide + edgeHeight);
    // console.log(screenHeight + 259);

    $(window).scroll(function(){
        $('.wrapeper_interior').css({
            height: screenHeight + 259
        })

        if ($(window).scrollTop() > (interiorPosSlide + edgeHeight)) {
            $('.interior-slide').addClass('position-fixed');
            $('.interior-slide').css({
                left: 0,
                top: 0
                // top: -edgeHeight
            })
        }

        if ($(window).scrollTop() < (interiorPosSlide + edgeHeight)) {
            $('.interior-slide').removeClass('position-fixed');
            $('.interior-slide').css({
                left: 0,
                top: 0
            })
        }
    })
});