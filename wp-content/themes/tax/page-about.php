<?php
/**
 * Template Name: about
 */
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('about_project_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('about_project_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('about_project_keywords_meta')); ?>">

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
    <style>
        footer .social-block {
            display: none;
        }
    </style>
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block">
        <h1 class="page-title"><?php the_field('about_project_page_title') ?></h1>
        <div class="breadcrumb">
            <ul class="breadcrumbs">
                <?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
            </ul>
        </div>
    </section>
    <section class="about-project-info">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title"><?php the_field('about_project_page_subtitle') ?></div>
            <?php the_field('about_project_page_description') ?>
        </div>
    </section>
    <section class="project-map">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="item">
                <div class="number"><?php the_field('about_project_page_tom_left_number') ?>
                    <span><?php the_field('about_project_page_tom_left_value') ?></span></div>
                <div class="text"><?php the_field('about_project_page_tom_left_text') ?></div>
            </div>
            <div class="item">
                <div class="number"><?php the_field('about_project_page_tom_middle_number') ?>
                    <span><?php the_field('about_project_page_tom_middle_value') ?></span></div>
                <div class="text"><?php the_field('about_project_page_tom_middle_text') ?></div>
            </div>
            <div class="item">
                <div class="number"><?php the_field('about_project_page_tom_right_number') ?>
                    <span><?php the_field('about_project_page_tom_right_value') ?></span></div>
                <div class="text"><?php the_field('about_project_page_tom_right_text') ?></div>
            </div>
        </div>
    </section>
    <section class="advanteges internal">
        <div class="wrap">
            <div class="item wow fadeInUp" data-wow-duration="1s">
                <div class="title"><?php the_field('about_project_page_oa_title') ?></div>

                <?php $advs = get_field('about_project_page_oa_adv');
                foreach ($advs as $sdv) {
                    ?>
                    <p>
                        <span>
                            <?=$sdv['about_project_page_oa_adv_number']?>
                        </span>
                        <?=$sdv['about_project_page_oa_adv_text']?>
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="social-block">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title"><?php the_field('about_project_page_social_title') ?></div>
            <div class="social-link">
                <a href="<?php the_field('social_linckedin_link', 'options') ?>" class="linked"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="<?php the_field('social_instagram_link', 'options') ?>" class="inst"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="fb" href="<?php the_field('social_facebook_link', 'options') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php the_field('social_twitter_link', 'options') ?>" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>