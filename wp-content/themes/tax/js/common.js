$( document ).ready(function() {
    //Slimmenu
    $('li').click(function(){
        $(this).children('.submenu').toggle(function (){
            $(this).prev('.caret').toggleClass('active')
        });
    });

    new WOW().init();

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

    //Magnific popUp
    $('.popUp-btn').magnificPopup();

    var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх" ($(window).height())
    var delay = 850; // Задержка прокрутки
    $(document).ready(function() {
        $(window).scroll(function () { // При прокрутке попадаем в эту функцию
            /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
            if ($(this).scrollTop() > top_show) $('#up-button').fadeIn();
            else $('#up-button').fadeOut();
        });
        $('#up-button').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
            /* Плавная прокрутка наверх */
            $('html, body').animate({scrollTop: 0}, delay);
        });
    });
});

