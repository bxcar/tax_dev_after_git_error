<?php
/**
 * Template Name: search-online_check-company
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('serach_online_chek_company_page_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('serach_online_chek_company_page_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('serach_online_chek_company_page_keywords')); ?>">

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
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block search">
        <h1 class="page-title"><?php the_field('serach_online_chek_company_page_title') ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/search_online">Поиск онлайн</a></li>
                <li><span
                        id="replace-question-sign"><?php the_field('serach_online_chek_company_page_subtitle') ?></span>
                </li>
            </ul>
            <script>
                var replaced_element = document.getElementById("replace-question-sign");
                replaced_element.innerHTML = replaced_element.innerHTML.replace(/\?/g, '');
            </script>
        </div>
    </section>
    <section class="search-info">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/search-online.png" alt=""></div>
            <div class="item">
                <div class="title"><?php the_field('serach_online_chek_company_page_subtitle') ?></div>
                <?php the_field('serach_online_chek_company_page_content') ?>
            </div>
        </div>
    </section>
    <section class="feadback-form search-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form"><?php the_field('search_online_check_company_page_form_title') ?></div>

            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="Проверить компанию - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options'); ?>">
                <input style="color: #fff" required name="name" type="text"
                       placeholder="<?php the_field('search_online_check_company_page_form_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email"
                       placeholder="<?php the_field('search_online_check_company_page_form_placeholder2') ?>">
                <textarea name="text"
                          placeholder="<?php the_field('search_online_check_company_page_form_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit"
                       value="<?php the_field('search_online_check_company_page_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php" ?>

        </div>
    </section>
    <section class="search-online search-1 wow fadeInUp" data-wow-duration="1s">
        <div class="title"><?php the_field('search_online_check_company_page_other_search_types_title') ?></div>
        <div class="wrap">

            <?php $other_search_types = get_field('search_online_check_company_page_other_search_types');
            foreach ($other_search_types as $other_search_type) {
                ?>
                <a href="<?php
                if($other_search_type['serach_online_chek_company_page_other_search_types_link_picker']['postid']) {
                    the_permalink($other_search_type['serach_online_chek_company_page_other_search_types_link_picker']['postid']);
                }
                else {
                    echo $other_search_type['serach_online_chek_company_page_other_search_types_link_picker']['url'];
                }
                ?>" target="<?php echo $other_search_type['serach_online_chek_company_page_other_search_types_link_picker']['target']; ?>"
                   class="item">
                    <div class="img-block">
                        <img src="<?= $other_search_type['serach_online_chek_company_page_other_search_types_image'] ?>"
                             alt="">
                    </div>
                    <p><?= $other_search_type['serach_online_chek_company_page_other_search_types_text'] ?></p>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
