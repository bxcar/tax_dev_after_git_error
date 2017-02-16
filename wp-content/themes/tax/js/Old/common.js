$(function() {

    //Slimmenu
    $('header .menu').slimmenu({
        resizeWidth: '800', /* Navigation menu will be collapsed when document width is below this size or equal to it. */
        initiallyVisible: false, /* Make main navigation menu initially visible on mobile devices without the need to click on expand/collapse icon. */
        collapserTitle: '', /* Collapsed menu title. */
        animSpeed: 'medium', /* Speed of the sub menu expand and collapse animation. */
        easingEffect: null, /* Easing effect that will be used when expanding and collapsing menu and sub menus. */
        indentChildren: false, /* Indentation option for the responsive collapsed sub menus. If set to true, all sub menus will be indented with the value of the option below. */
        childrenIndenter: '&nbsp;', /* Responsive sub menus will be indented with this character according to their level. */
        expandIcon: '<i>&#9660;</i>', /* An icon to be displayed next to parent menu of collapsed sub menus. */
        collapseIcon: '<i>&#9650;</i>' /* An icon to be displayed next to parent menu of expanded sub menus. */
    });

    $('.carousel-1').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        nav: false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    });

    $('.carousel-2').owlCarousel({
        loop:true,
        margin: 30,
        responsiveClass:true,
        nav: false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:2,
            }
        }
    });

    $('.carousel-3').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            }
        }
    });

    $('.carousel-4').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    });

    $('.carousel-5').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            },
            1200:{
                items:4,
            }
        }
    });

    //In view
    function come(elem) {
        var docViewTop = $(window).scrollTop(),
            docViewBottom = docViewTop + $(window).height(),
            elemTop = $(elem).offset().top,
            elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function(){
        if (come(".rotate-wrap")) {
            $(".our-work").addClass("animate")
        }
    });

    new WOW().init();

    //Magnific popUp
    $('.popUp-btn').magnificPopup();
});
