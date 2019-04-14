$(document).ready(function () {
    var screenHeight = $(window).height();

    $('.collapse-down').on('click', function(){
        $('#collapseSupport').collapse('hide')
    })

    $('.scroll_to_top').on('click', function(){
        $('html, body').animate({ scrollTop: $('#main').position().top }, 'slow');
    })

    $(window).scroll(function () {
        if ($(window).scrollTop() > (screenHeight / 2)) {
            $('.scroll_to_top').css({
                display: 'block'
            })
        } else {
            $('.scroll_to_top').css({
                display: 'none'
            })
        }
    })
});