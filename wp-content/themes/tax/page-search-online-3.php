<?php
/**
 * Template Name: search-online_usa
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('search_online_usa_page_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('search_online_usa_page_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('search_online_usa_page_keywords')); ?>">

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
    <section class="top-block search">
        <h1 class="page-title"><?php the_field('search_online_usa_page_title') ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/search_online">Поиск онлайн</a></li>
                <li><span><?php the_field('search_online_usa_page_title_usa') ?></span></li>
            </ul>
        </div>
    </section>
    <section class="search-online-list wow fadeInUp" data-wow-duration="1s">
        <div class="wrap">
            <div class="title"><?php the_field('search_online_usa_page_title_usa') ?></div>
            <div class="search-list">

                <?php $columns_all = get_field('search_online_usa_page_search');
                if (get_field('search_online_usa_page_search')) {
                    foreach ($columns_all as $columns_single) {
                        ?>
                        <div class="list">
                            <ul>
                                <?php
                                foreach ($columns_single['serach_online_world_page_search_column'] as $columns_single_country) {
                                    ?>
                                    <li>
                                        <a href="<?php
                                        if($columns_single_country['serach_online_world_page_search_column_punkt_link_picker']['postid']) {
                                            the_permalink($columns_single_country['serach_online_world_page_search_column_punkt_link_picker']['postid']);
                                        }
                                        else {
                                            echo $columns_single_country['serach_online_world_page_search_column_punkt_link_picker']['url'];
                                        }
                                        ?>" target="<?php echo $columns_single_country['serach_online_world_page_search_column_punkt_link_picker']['target']; ?>">
                                            <?= $columns_single_country['serach_online_world_page_search_column_punkt'] ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
