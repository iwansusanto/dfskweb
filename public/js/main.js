$(document).ready(function () {
    var screenHeight = $(window).height();

    $('.collapse-down').on('click', function(){
        $('#collapseSupport').collapse('hide')
    })

    $('.btn-menu-mobile').on('click', function(){
        var el = $(this);
        if (el.parent().find('.mobile-menu').hasClass('show')) {
            el.find('i').removeClass('fa-bars').addClass('fa-bars');
        } else {
            el.find('i').removeClass('fa-bars').addClass('fa-times');
        }
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