<?php
/**
 * Template Name: search-online
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('search_online_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('search_online_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('search_online_keywords_meta')); ?>">

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
        <h1 class="page-title"><?php the_field('serach_online_page_title') ?></h1>
        <div class="breadcrumb">
            <ul class="breadcrumbs">
                <?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
            </ul>
        </div>
    </section>
    <section class="search-online">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">

            <?php $search_punkts = get_field('serach_online_search_types');
            foreach ($search_punkts as $search_punkt) {
                ?>
                <a href="<?php
                if($search_punkt['serach_online_search_types_link_picker']['postid']) {
                    the_permalink($search_punkt['serach_online_search_types_link_picker']['postid']);
                }
                else {
                    echo $search_punkt['serach_online_search_types_link_picker']['url'];
                }
                ?>" target="<?php echo $search_punkt['serach_online_search_types_link_picker']['target']; ?>" class="item">
                    <div class="img-block">
                        <img src="<?=$search_punkt['serach_online_search_types_image']?>" alt="">
                    </div>
                    <p><?=$search_punkt['serach_online_search_types_text']?></p>
                </a>
                <?php
            }
            ?>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
