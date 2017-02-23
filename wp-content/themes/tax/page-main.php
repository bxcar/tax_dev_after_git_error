<?php
/**
 * Template Name: main
 */
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('main_page_title'); ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('main_page_description')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('main_page_keywords')); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/path/to/image.jpg">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->

    <?php wp_head() ?>
    <style>
        .results {
            background: url(<?php the_field('main_page_result_background_image') ?>) 50% no-repeat;
            background-size: cover;
        }

        .advanteges {
            background: url(<?php the_field('main_page_result_background_image_our_advantages') ?>) 50% no-repeat;
            background-size: cover;
        }

        @media (max-width: 991px) {
            .advanteges {
                background: url(<?php the_field('main_page_result_background_image_our_advantages') ?>) 100% no-repeat;
            }

            .results {
                background: url(<?php the_field('main_page_result_background_image') ?>) no-repeat;
                background-size: cover;
            }
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            color: #fff;
        }

        @media (max-width: 600px) {
            .page-not-found .error-block .sutitle {
                position: relative;
                top: -40px;
            }

            .page-not-found .error-block p {
                position: relative;
                top: 40px;
            }
        }

        @media (max-width: 800px) {
            header .menu-collapser {
                margin-top: 0px;
            }

            header .menu-collapser {
                position: absolute;
                top: 0;
                left: -15px;
            }

            header .menu.collapsed {
                position: absolute;
                top: 48px;
                left: -15px;
            }
        }

        @media (max-width: 500px) {
            header .menu.collapsed,
            header .menu-collapser {
                position: relative;
            }

            header .menu.collapsed {
                top: 0;
            }
        }

        @media (max-device-width: 700px) and (orientation: landscape) {
            header .left-side, .dop-menu {
                position: relative;
                top: -50px;
                /*display: none;*/
            }

            .head-block .wrap h1 br {
                display: none;
            }
        }
    </style>
</head>

<body>
<!-- Custom HTML -->
<!-- Header -->
<header class="front">
    <div id="up-button"><img alt="Прокрутить вверх" src="<?= get_template_directory_uri(); ?>/img/up.png"></div>
    <div class="wrap">
        <div class="left-side">
            <a class="logo" href="<?= home_url(); ?>">
                <img src="<?php
                if (get_field('main_page_logo')) {
                    the_field('main_page_logo');
                }
                ?>" alt="">
            </a>
            <div class="phone">
                <p><i class="fa fa-phone" aria-hidden="true"></i><?php
                    if (get_field('main_page_phone')) {
                        the_field('main_page_phone');
                    }
                    ?></p>
                <a href="#callback-form" class="popUp-btn"><?php
                    if (get_field('main_page_text_under_phone')) {
                        the_field('main_page_text_under_phone');
                    }
                    ?></a>
                <div class="hidden">
                    <div class="feadback-form" id="callback-form">
                        <div class="form-wrap">
                            <div class="title-form">Заказать обратный звонок</div>
                            <style>
                                .feadback-form input[type=tel] {
                                    display: inline-block;
                                    margin-left: 15px;
                                    width: -webkit-calc(50% - 15px);
                                    width: calc(50% - 15px);
                                }

                                @media (max-width: 450px) {
                                    .feadback-form input[type=tel] {
                                        width: 100%;
                                        margin-left: 0;
                                    }
                                }

                            </style>
                            <form id="popup-form" method="post">
                                <input type="hidden" name="source"
                                       value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                                <input type="hidden" name="order" value="Главная страница - заказать звонок">
                                <input type="hidden" name="sendto"
                                       value="<?= get_field('footer_target_email', 'options'); ?>">
                                <input style="color: #fff" required name="name" type="text"
                                       placeholder="<?php the_field('main_page_wo_placeholder1') ?>">
                                <input style="color: #fff" required name="phone" type="tel" placeholder="Телефон">
                                <textarea name="text"
                                          placeholder="<?php the_field('main_page_wo_placeholder3') ?>"></textarea>
                                <input id="submit-popup-form" type="submit"
                                       value="<?php the_field('main_page_wo_button_text') ?>">
                            </form>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
                            <script>
                                // this is the id of the form
                                $("#popup-form").submit(function (e) {

                                    $("#submit-popup-form").attr("value", "");
                                    $("#submit-popup-form").css(
                                        {
                                            "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                                            "background-size": "15%",
                                            "background-repeat": "no-repeat",
                                            "background-position-y": "50%",
                                            "background-position-x": "50%"
                                        }
                                    );
                                    var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

                                    $.ajax({
                                        type: "POST",
                                        url: url,
                                        data: $("#popup-form").serialize(), // serializes the form's elements.
                                        success: function (data) {
                                            if (data == 1) {
                                                $("#submit-popup-form").attr("value", "Успешно отправлено");
                                                $("#submit-popup-form").css({"background-image": "none"});

                                                jQuery('#popup-form')[0].reset();
                                            }

                                            else {
                                                $("#submit-popup-form").attr("value", "Произошла ошибка");
                                                $("#submit-popup-form").css({"background-image": "none"});
                                            }
//                                            alert(data);
                                        },

                                        error: function (data) {
                                            $("#submit-popup-form").attr("value", "Произошла ошибка");
                                            $("#submit-popup-form").css({"background-image": "none"});
                                        }
                                    });

                                    e.preventDefault(); // avoid to execute the actual submit of the form.

                                    setTimeout(func, 10000);

                                    function func() {
                                        $("#submit-popup-form").attr("value", "Отправить");
                                        $("#submit-popup-form").css({"background-image": "none"});
                                    }
                                });

                                <?php $titles = get_field('main_page_content_title');
                                if(count($titles) > 1) {?>
                                $(document).ready(function () {
                                    $('.text-block').eq(0).addClass("active").fadeIn(<?php the_field('main_page_animation_speed');?>); // Показываем первый блок, можно и не первый, если прописать нужную цифру в eq()
                                    setInterval('blockAnimate();', <?php the_field('main_page_title_change_speed');?>); // Вызываем функцию для смены блока каждые 5 секунд
                                });

                                // Функция для смены блоков, показывает блоки по очереди, начальный блок задаётся выше
                                function blockAnimate() {
                                    var anim = <?php the_field('main_page_animation_speed');?>;
                                    var length = $('.text-block').length - 1;
                                    $('.text-block').each(function (index) {
                                        if ($(this).hasClass('active') && index != length) {
                                            $(this).removeClass("active").fadeOut(anim).next('.text-block').addClass("active").delay(anim).fadeIn(anim);
                                            return false;
                                        } else if (index == length) {
                                            $(this).removeClass('active').fadeOut(anim);
                                            $('.text-block').eq(0).addClass("active").delay(anim).fadeIn(anim);
                                            return false;
                                        }
                                    });
                                }
                                <?php }
                                else {
                                ?>
                                $(document).ready(function () {
                                    $('.text-block').eq(0).addClass("active").fadeIn(1);
                                });
                                <?php
                                }?>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
    </div>
</header>
<!-- End header -->
<!-- Content -->
<main>
    <section class="head-block">
        <video autoplay loop muted class="bgvideo" id="bgvideo">
            <source src="<?php the_field('main_page_video') ?>" type="video/mp4"/>
        </video>
        <div class="after-v-bg"></div>
        <div class="wrap">
            <?php $titles = get_field('main_page_content_title');
            if ($titles) {
                foreach ($titles as $title) {
                    ?>
                    <h1 style="display: none;" class="text-block"><?= $title['main_page_content_title_single'] ?></h1>
                    <?php
                }
            }
            ?>
            <a href="<?php

            if (get_field('main_page_button_link_picker_2')['postid']) {
                the_permalink(get_field('main_page_button_link_picker_2')['postid']);
            }
            else {
                echo get_field('main_page_button_link_picker_2')['url'];
            }

            ?>"
               target="<?php echo get_field('main_page_button_link_picker_2')['target']; ?>"><?php the_field('main_page_button_text') ?></a>
            <div class="icon-scroll"></div>
            <!--            main_page_button_link_picker_2-->
        </div>
    </section>
    <section class="our-services">
        <div class="wrap">
            <div class="title wow fadeInUp" data-wow-duration="1s">
                <?php the_field('main_page_os_title') ?>
            </div>
            <!--############# -->
            <div class="text wow fadeInUp" data-wow-duration="1s">
                <?php the_field('main_page_os_description') ?>
            </div>
            <div class="services wow fadeInUp" data-wow-duration="1s">
                <?php $services = get_field('main_page_os_services');
                foreach ($services as $service) {
                    ?>
                    <a href="<?php
                    if ($service['main_page_os_services_single_service_link_picker']['postid']) {
                        the_permalink($service['main_page_os_services_single_service_link_picker']['postid']);
                    }
                    else {
                        echo $service['main_page_os_services_single_service_link_picker']['url'];
                    }
                    ?>" target="<?php echo $service['main_page_os_services_single_service_link_picker']['target']; ?>"
                       class="item">
                        <img src="<?= $service['main_page_os_services_single_service_img'] ?>" alt="">
                        <p>
                            <span><?= $service['main_page_os_services_single_service_number'] ?></span>
                            <?= $service['main_page_os_services_single_service_text'] ?>
                        </p>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="special-offer">
        <div class="offer-title wow fadeInUp" data-wow-duration="1s"><?php the_field('main_page_so_title') ?></div>
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="owl-carousel carousel-1">
                <?php $offers = get_field('main_page_so_offers');
                foreach ($offers as $offer) {
                    ?>
                    <div class="item">
                        <div class="item-wrap">
                            <p><?= $offer['main_page_so_offers_single_offer_text'] ?></p>
                            <a href="<?php
                            if ($offer['main_page_so_offers_single_offer_link_picker']['postid']) {
                                the_permalink($offer['main_page_so_offers_single_offer_link_picker']['postid']);
                            }
                            else {
                                echo $offer['main_page_so_offers_single_offer_link_picker']['url'];
                            }
                            ?>"
                               target="<?php echo $offer['main_page_so_offers_single_offer_link_picker']['target']; ?>">
                                ПОДРОБНЕЕ
                                <img src="<?php bloginfo('template_url'); ?>/img/right-arrow.png" alt=""></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="results">
        <div class="wrap">
            <div class="results-title wow fadeInUp" data-wow-duration="1s">
                <?php the_field('main_page_result_title') ?>
            </div>
            <div class="result-items wow fadeInUp" data-wow-duration="1s">
                <div class="item">
                    <div class="number">
                        <?php the_field('main_page_result_1_number') ?>
                    </div>
                    <p>
                        <?php the_field('main_page_result_1_text') ?>
                    </p>
                    <div class="number">
                        <?php the_field('main_page_result_3_number') ?>
                    </div>
                    <p>
                        <?php the_field('main_page_result_3_text') ?>
                    </p>
                </div>
                <div class="item">
                    <div class="number">
                        <?php the_field('main_page_result_2_number') ?>
                    </div>
                    <p>
                        <?php the_field('main_page_result_2_text') ?>
                    </p>
                    <div class="number">
                        <?php the_field('main_page_result_4_number') ?>
                    </div>
                    <p>
                        <?php the_field('main_page_result_4_text') ?>
                    </p>
                </div>
                <div class="item bank">
                    <img src="<?php the_field('main_page_result_img_in_circle') ?>" alt="">
                    <p><?php the_field('main_page_result_text_in_circle') ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-work">
        <div class="wrap">
            <div class="title wow fadeInUp" data-wow-duration="1s"><?php the_field('main_page_hww_title') ?></div>
            <div class="work-item wow fadeInUp" data-wow-duration="1s">
                <div class="rotate-wrap">
                    <div class="item">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24">
                                <path
                                    d="M16.613 13.785c.873-1.387 1.387-3.024 1.387-4.785 0-4.971-4.029-9-9-9s-9 4.029-9 9 4.029 9 9 9c1.761 0 3.397-.513 4.785-1.387l7.387 7.387 2.828-2.828-7.387-7.387zm-6.613 2.135v-3.92h-2v3.92c-3.059-.44-5.479-2.861-5.92-5.92h3.92v-2h-3.92c.441-3.059 2.861-5.479 5.92-5.92v3.92h2v-3.92c3.059.44 5.479 2.861 5.92 5.92h-3.92v2h3.92c-.441 3.059-2.861 5.479-5.92 5.92z"/>
                            </svg>
                        </div>
                        <div class="shema">
                            <div class="circle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <p><?php the_field('main_page_hww_text1') ?></p>
                    </div>
                    <div class="item">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="83" viewBox="0 0 24 24">
                                <path
                                    d="M5.495 2h16.505v-2h-17c-1.657 0-3 1.343-3 3v18c0 1.657 1.343 3 3 3h17v-20h-16.505c-1.375 0-1.375-2 0-2zm6.681 17c-.573 0-1.04-.467-1.04-1.042 0-.576.467-1.042 1.04-1.042.576 0 1.042.466 1.042 1.042 0 .575-.466 1.042-1.042 1.042zm.034-10c1.644 0 2.81 1.015 2.79 2.666-.015 1.134-.705 1.878-1.259 2.477-.832.896-.766 1.336-.766 1.941h-1.644c0-1.311-.045-1.84 1.174-2.999.469-.446.839-.799.788-1.493-.048-.66-.599-1.004-1.118-1.004-.883 0-1.26.785-1.26 1.746h-1.647c0-2.212 1.262-3.334 2.942-3.334z"/>
                            </svg>
                        </div>
                        <div class="shema">
                            <div class="circle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <p><?php the_field('main_page_hww_text2') ?></p>
                    </div>
                    <div class="item">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="69" viewBox="0 0 24 24">
                                <path
                                    d="M4 22v-20h16v11.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362zm18-7.614v-14.386h-20v24h10.189c3.163 0 9.811-7.223 9.811-9.614zm-5-1.386h-10v-1h10v1zm0-4h-10v1h10v-1zm0-3h-10v1h10v-1z"/>
                            </svg>
                        </div>
                        <div class="shema">
                            <div class="circle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <p><?php the_field('main_page_hww_text3') ?></p>
                    </div>
                    <div class="item">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="99" height="73" viewBox="0 0 24 24">
                                <path
                                    d="M19.5 11c-2.485 0-4.5 2.015-4.5 4.5s2.015 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.015-4.5-4.5-4.5zm-.469 6.484l-1.688-1.637.696-.697.991.94 2.116-2.169.696.696-2.811 2.867zm-15.031-2.484h5v1h-5v-1zm8-1h-8v-1h8v1zm1.502 4h-11.002c-.276 0-.5-.224-.5-.5v-6.5h12.82c1.184-1.23 2.842-2 4.68-2 .886 0 1.729.179 2.5.501v-3.501c0-1.104-.896-2-2-2h-18c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h12.82c-.553-.576-1.006-1.251-1.318-2zm-11.502-11.5c0-.276.224-.5.5-.5h17c.276 0 .5.224.5.5v1.5h-18v-1.5z"/>
                            </svg>
                        </div>
                        <div class="shema">
                            <div class="circle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <p><?php the_field('main_page_hww_text4') ?></p>
                    </div>
                    <div class="item">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="67" viewBox="0 0 24 24">
                                <path
                                    d="M12 3c5.514 0 10 3.592 10 8.007 0 4.917-5.145 7.961-9.91 7.961-1.937 0-3.383-.397-4.394-.644-1 .613-1.595 1.037-4.272 1.82.535-1.373.723-2.748.602-4.265-.838-1-2.025-2.4-2.025-4.872-.001-4.415 4.485-8.007 9.999-8.007zm0-2c-6.338 0-12 4.226-12 10.007 0 2.05.738 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 1.418.345 2.775.503 4.059.503 7.084 0 11.91-4.837 11.91-9.961-.001-5.811-5.702-10.006-12.001-10.006zm-3.5 10c0 .829-.671 1.5-1.5 1.5-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5c.829 0 1.5.671 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5c.829 0 1.5-.671 1.5-1.5s-.671-1.5-1.5-1.5zm5 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5c.829 0 1.5-.671 1.5-1.5s-.671-1.5-1.5-1.5z"/>
                            </svg>
                        </div>
                        <div class="shema">
                            <div class="circle"></div>
                            <div class="rectangle"></div>
                        </div>
                        <p><?php the_field('main_page_hww_text5') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advanteges">
        <div class="wrap">
            <div class="item">
                <div class="title wow fadeInUp" data-wow-duration="1s">
                    <?php the_field('main_page_oa_title') ?>
                </div>
                <?php $adventures = get_field('main_page_oa_adv');
                foreach ($adventures as $adventure) {
                    ?>
                    <p class="wow fadeInUp" data-wow-duration="1s">
                        <span><?= $adventure['main_page_oa_adv_number'] ?></span>
                        <?= $adventure['main_page_oa_adv_text'] ?>
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="helpful-info">
        <div class="wrap">
            <div class="title wow fadeInUp" data-wow-duration="1s"><?php the_field('main_page_hi_title') ?></div>
            <div class="info-item wow fadeInUp" data-wow-duration="1s">
                <?php $helpful_information = get_field('main_page_hi_inf');
                foreach ($helpful_information as $helpful_inf) {
                    ?>
                    <div class="item">
                        <a href="<?php
                        if ($helpful_inf['main_page_hi_inf_link_picker']['postid']) {
                            the_permalink($helpful_inf['main_page_hi_inf_link_picker']['postid']);
                        }
                        else {
                            echo $helpful_inf['main_page_hi_inf_link_picker']['url'];
                        }
                        ?>" target="<?php echo $helpful_inf['main_page_hi_inf_link_picker']['target']; ?>">
                            <?= $helpful_inf['main_page_hi_inf_text'] ?>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="see-more">
                <a href="<?php
                if (get_field('main_page_hi_button_link_picker')['postid']) {
                    the_permalink(get_field('main_page_hi_button_link_picker')['postid']);
                }
                else {
                    echo get_field('main_page_hi_button_link_picker')['url'];
                }
                ?>" target="<?php echo get_field('main_page_hi_button_link_picker')['target']; ?>">
                    <?php the_field('main_page_hi_button_text') ?>
                </a>
            </div>
        </div>
    </section>
    <section class="feadback-form">
        <div class="form-wrap">
            <div class="title-form wow fadeInUp" data-wow-duration="1s">
                <?php the_field('main_page_wo_title') ?>
            </div>
            <form id="static-form" method="post" class="wow fadeInUp" data-wow-duration="1s">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="Главная страница - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options'); ?>">
                <input style="color: #fff" required name="name" type="text"
                       placeholder="<?php the_field('main_page_wo_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email"
                       placeholder="<?php the_field('main_page_wo_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('main_page_wo_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('main_page_wo_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php" ?>
        </div>
    </section>
    <section class="news-front">
        <div class="title wow fadeInUp" data-wow-duration="1s"><?php the_field('main_page_news_title') ?></div>
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="owl-carousel carousel-2">
                <?php
                $args_last_news = array(
                    'numberposts' => -1,
                    'post_type' => 'tax_news',
                    'posts_per_page' => 8
                );

                // query
                $the_query_last_news = new WP_Query($args_last_news);
                if ($the_query_last_news->have_posts()) {
                    while ($the_query_last_news->have_posts()) {
                        $the_query_last_news->the_post(); ?>
                        <div class="item">
                            <div class="item-wrap">
                                <div class="date"><?= get_the_date('j F Y') ?></div>
                                <p><?php the_title(); ?></p>
                                <a href="<?php the_permalink(); ?>"></a>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>

