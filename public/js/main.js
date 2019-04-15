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

    $('.mobile-list-menu').find('li').each(function(index, e) {
        var el = $(this);
        el.on('click', function(){
            if(el.find('.collapse').hasClass('show')) {
                el.find('a').children().removeClass('fa-chevron-up').addClass('fa-chevron-down');
            } else {
                el.find('a').children().removeClass('fa-chevron-down').addClass('fa-chevron-up');
            }
        })
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