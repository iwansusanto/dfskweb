
$(document).ready(function () {
    var interiorPosSlide = $('.interior-slide').offset().top;
    var heightSlide = $('.interior-slide').innerHeight();
    var screenHeight = $(window).height();
    // var edgeHeight = heightSlide - screenHeight;

    $('#carouselColorCar').carousel();

    $('#carouselColorSpec').carousel();

    $('.slider').bxSlider({
        auto: true,
        pager: false,
        controls: false
    });

    $('.spec-various li').each(function (index, e) {
        var el = $(this);
        el.on('click', function () {
            el.parent().find('li').removeClass('active');
            el.addClass('active');
        })
    });

    $(window).scroll(function () {
        $('.wrapeper_interior').css({
            height: screenHeight + 259
        })
        
        if ($(window).scrollTop() > (interiorPosSlide)) {
            console.log(interiorPosSlide)
            $('.interior-slide').addClass('position-fixed');
            $('.interior-slide').css({
                left: 0,
                top: 0
            })
        }

        if ($(window).scrollTop() < (interiorPosSlide)) {
            $('.interior-slide').removeClass('position-fixed');
            $('.interior-slide').css({
                left: 0,
                top: 0
            })
        }
    })

});