$(document).ready(function(){
    new WOW().init();
    var scroll = new SmoothScroll('a[href*="#"]', {
        header: '[data-scroll-header]',
        speed: 1000
    });

    $(function () {
        $(window).scroll(function () {
            var scrolltop = $(this).scrollTop();
            if (scrolltop >= 50) {
                $(".slide-up").fadeIn();
            } else {
                $(".slide-up").fadeOut();
            }
        });
    });

    $(window).scroll(function () {
        var nav = $('.header');
        var scroll = $(window).scrollTop();
        if (scroll >= 80) {
            nav.addClass("fondo-menu");
        } else {
            nav.removeClass("fondo-menu");
        }
    });
});
