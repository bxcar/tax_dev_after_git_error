<?php
/**
 * Template Name: tax_jur_centers
 */
?>
<?php
// args
$args = array(
    'numberposts' => -1,
    'post_type' => 'tax_jur_centers',
    'p' => get_the_ID()
);


// query
$the_query = new WP_Query($args);
if ($the_query->have_posts()):
    while ($the_query->have_posts()) :
        $the_query->the_post(); ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('tax_finance_companies_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('tax_finance_companies_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('tax_finance_companies_keywords_meta')); ?>">

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
    <?php wp_head();?>
    <style>
        .content-wrap blockquote {
            background-color: #fcfcfd;
            padding: 40px 40px 38px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .content-wrap ol,
        .content-wrap ul {
            list-style: none;
        }

        .content-wrap ul {
            margin-bottom: 10px;
        }

        .content-wrap strong {
            font-weight: 700;
        }

        .content-wrap li {
            color: #928f8f;
            font-size: .8125rem;
            font-weight: 400;
            line-height: 34px;
        }

        .content-wrap ul > li:before {
            content: '';
            width: 6px;
            height: 6px;
            background-color: #3ca04f;
            display: inline-block;
            margin-bottom: 2px;
            margin-right: 23px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .content-wrap ul li ol li {
            list-style-type: none !important;
        }

        .content-wrap ol > li::before {
            counter-increment: myCounter;
            content: counter(myCounter);
            color: #424242;
            font-size: 1rem;
            font-weight: 700;
            line-height: 35px;
            font-family: georgia, sans-serif;
            padding-right: 10px;
        }

        .content-wrap p {
            font-size: .8125rem;
            font-weight: 400;
            color: #928f8f;
            line-height: 22px;
            padding-bottom: 15px;
        }

        h3 {
            color: #424242;
            font-family: georgia, sans-serif;
            font-size: 1.1875rem;
            font-weight: 700;
            line-height: 24px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        h3::before {
            content: '';
            width: 5px;
            height: 14px;
            background-color: #3ca04f;
            display: inline-block;
            margin-right: 10px;
        }

        blockquote p {
            color: #424242 !important;
        }
    </style>
    <script>
        jQuery(document).ready(function () {
            var ol = $('ol');

            for(var i = 0; i < ol.length; i++) {
                ol[i].className = 'number-list';
            }
        });
    </script>
</head>

<body>

<!-- Custom HTML -->
<?php get_header();?>
<!-- Content -->
<main>
    <section class="top-block top-jur-center">
        <h1 class="page-title"><?php the_field('tax_finance_companies_title_page') ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url');?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url');?>/jur_center">Центры юрисдикций</a></li>
                <li><span><?php the_title();?></span></li>
            </ul>
        </div>
    </section>
    <section class="fin-companies-info jur-center-info">
        <div class="subtitle wow fadeInUp" data-wow-duration="1s"><?php the_field('tax_finance_companies_title_company') ?></div>
        <?php if(get_field('tax_finance_companies_image')) { ?>
        <div class="fin-companies-img wow fadeInUp" data-wow-duration="1s">
            <img src="<?php the_field('tax_finance_companies_image') ?>" alt="">
            <style>
                .fin-companies-img #pulse-dot {
                    top: -webkit-calc(<?php the_field('tax_finance_companies_image_puls_y_coordinat'); ?>% - 6px);
                    top: calc(<?php the_field('tax_finance_companies_image_puls_y_coordinat'); ?>% - 6px);
                    left: -webkit-calc(<?php the_field('tax_finance_companies_image_puls_x_coordinate'); ?>% - 4px);
                    left: calc(<?php the_field('tax_finance_companies_image_puls_x_coordinate'); ?>% - 4px)
                }
            </style>
            <div id="pulse-dot">
                <div class="dot"></div>
                <div class="pulse"></div>
            </div>
        </div>
        <?php } ?>
        <div class="wrap content-wrap">
            <?php the_content(); ?>
        </div>
    </section>
    <section class="feadback-form flags-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form"><?php the_field('tax_jur_centers_title_form');?></div>
            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="<?php the_title(); ?> - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                <input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('tax_jur_centers_form_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email" placeholder="<?php the_field('tax_jur_centers_form_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('tax_jur_centers_form_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('tax_jur_centers_form_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php"?>
        </div>
    </section>
    <section class="more-services more-jur-center vnutr wow fadeInUp" data-wow-duration="1s">
        <div class="title"><?php the_field('tax_jur_centers_bottom_text');?></div>
        <div class="wrap">
            <div class="owl-carousel carousel-4">
                <?php

                $args_last_news = array(
                    'post__not_in' => array(get_the_ID()),
                    'numberposts' => -1,
                    'post_type' => 'tax_jur_centers',
                    'posts_per_page' => get_field('tax_jur_centers_bottom_centers_amount'),
                    'orderby' => 'rand'
                );

                // query
                $the_query_last_news = new WP_Query($args_last_news);
                if ($the_query_last_news->have_posts()) {
                    while ($the_query_last_news->have_posts()) {
                        $the_query_last_news->the_post();
                        ?>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item">
                                <span class="text"><?php the_title(); ?></span>
                            </a>
                        </div>
                    <?php }
                } ?>
                <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<?php get_footer();?>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
