<?php
/**
 * Template Name: services
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('services_page_title') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('services_page_description')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('services_page_keywords')); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="<?= get_template_directory_uri();?>/path/to/image.jpg">
    <link rel="shortcut icon" href="<?= get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">
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
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block top-services">
        <h1 class="page-title"><?php the_field('services_main_title') ?></h1>
        <div class="breadcrumb">
            <ul class="breadcrumbs">
                <?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
            </ul>
        </div>
    </section>
    <section class="services-page">
<!--        <div class="title">--><?php //the_field('services_page_s_title') ?><!--</div>-->
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <?php $services = get_field('services_page_s_services');
            foreach ($services as $service) {
                ?>
                <a href="<?php
                if($service['services_page_s_services_single_service_link_picker']['postid']) {
                    the_permalink($service['services_page_s_services_single_service_link_picker']['postid']);
                }
                else {
                    echo $service['services_page_s_services_single_service_link_picker']['url'];
                }
                ?>" target="<?php echo $service['services_page_s_services_single_service_link_picker']['target']; ?>"
                   class="item">
                    <div class="img-block">
                        <img src="<?=$service['services_page_s_services_single_service_img']?>" alt="">
                    </div>
                    <p><?=$service['services_page_s_services_single_service_text']?></p>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
    <section class="footnote wow fadeInUp" data-wow-duration="1s">
            <p><?php the_field('services_page_s_description') ?></p>
    </section>
    <section class="feadback-form flags-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form"><?php the_field('services_page_gc_title') ?></div>

            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="Услуги и цены - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                <input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('services_page_gc_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email" placeholder="<?php the_field('services_page_gc_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('services_page_gc_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('services_page_gc_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php"?>

        </div>
    </section>
    <section class="facilities-services-block wow fadeInUp" data-wow-duration="1s">
        <div class="title"><?php the_field('services_page_ss_title') ?></div>
        <div class="wrap">
            <?php $services_and_facilities = get_field('services_page_ss_services');
            foreach ($services_and_facilities as $service_and_facility) {
                ?>
                <a href="<?php
                if($service_and_facility['services_page_ss_services_single_service_link_picker']['postid']) {
                    the_permalink($service_and_facility['services_page_ss_services_single_service_link_picker']['postid']);
                }
                else {
                    echo $service_and_facility['services_page_ss_services_single_service_link_picker']['url'];
                }
                ?>" target="<?php echo $service_and_facility['services_page_ss_services_single_service_link_picker']['target']; ?>"
                   class="item">
                <span class="img-block">
                    <img src="<?=$service_and_facility['services_page_ss_services_single_service_img']?>" alt="">
                </span>
                    <span class="text">
                        <?=$service_and_facility['services_page_ss_services_single_service_text']?>
                    </span>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>