//animate categories and archives block in sidebar
$(document).ready(function () {
    $('a#link-display-cat').click(function (e) {
        $(this).toggleClass('active');
        if ($('#cat-hidden-block').css('display') == 'none') {

            $('#cat-hidden-block').animate({height: 'show'}, 500);

            $('#transform-right-arrow').animate({borderSpacing: 90}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        }
        else {
            $('#cat-hidden-block').animate({height: 'hide'}, 500);

            $('#transform-right-arrow').animate({borderSpacing: 0}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        }
        e.stopPropagation();
    });


    $('a#link-display-arch').click(function (e) {
        $(this).toggleClass('active');
        if ($('#arch-hidden-block').css('display') == 'none') {

            $('#arch-hidden-block').animate({height: 'show'}, 500);

            $('#transform-right-arrow-arch').animate({borderSpacing: 90}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        }
        else {
            $('#arch-hidden-block').animate({height: 'hide'}, 500);

            $('#transform-right-arrow-arch').animate({borderSpacing: 0}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        }

        e.stopPropagation();


        //close archives by month
        $('div#archive-by-month').next().animate({height: 'hide'}, 500);

        $('div#archive-by-month').find('img').animate({borderSpacing: 0}, {
            step: function (now, fx) {
                $(this).css('transform', 'rotate(' + now + 'deg)');
            },
            duration: 'slow'
        }, 'linear');

    });


    //  click archives by month
    $('div#archive-by-month').click(function (e) {
        // alert(this.next('.archive-month-list'));
        if ($(this).next().css('display') == 'none') {

            $(this).next().animate({height: 'show'}, 500);

            $(this).find('img').animate({borderSpacing: 90}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');

        }

        else
        {
            $(this).next().animate({height: 'hide'}, 500);

            $(this).find('img').animate({borderSpacing: 0}, {
                step: function (now, fx) {
                    $(this).css('transform', 'rotate(' + now + 'deg)');
                },
                duration: 'slow'
            }, 'linear');
        }
    });

    //  /click archives by month
});