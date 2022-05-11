$(document).ready(function(){
    $('.owl-three').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 3,
                nav: false
            },
            480: {
                items: 3,
                nav: false
            },
            667: {
                items: 4,
                nav: false
            },
            800: {
                items: 5,
                nav: false
            },
            1280: {
                items: 6,
                nav: false
            }
        }
    });

    $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            736: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            415: {
                items: 2,
                nav: true,
                margin: 20
            },
            667: {
                items: 3,
                nav: true,
                margin: 20
            },
            1000: {
                items: 4,
                nav: true,
                loop: true,
                margin: 25
            }
        }
    });

    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
    });

    $('.counter').countUp();

});


     