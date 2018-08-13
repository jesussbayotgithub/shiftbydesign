jQuery( function ( $ ) {

    'use strict';

    AOS.init();
    $(window).on('load', function() {
        AOS.refresh();
    });

    $(window).load(function(){
        $('#loader').fadeOut();
    });


    var offset = 300;
    var duration = 600;
    $(window).scroll(function() {
        AOS.refresh();

        if ($(this).scrollTop() > offset) {
            $('#site-navigation').addClass('scroll').addClass('fadeIn');
            $('.back-to-top').fadeIn(400);
        } else {
            $('.back-to-top').fadeOut(400);
            $('#site-navigation').removeClass('scroll').removeClass('fadeIn');
        }
    });
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
    })

    $("html").niceScroll({
        scrollspeed: 60,
        mousescrollstep: 38,
        cursorwidth: 6,
        cursorborder: 0,
        cursorcolor: '#111',
        autohidemode: false,
        zindex: 9999999,
        horizrailenabled: false,
        cursorborderradius: 0,
    });

});