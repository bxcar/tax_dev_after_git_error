<?php
/**
 * Template Name: facilities-services
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('facilities_and_services_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('facilities_and_services_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('facilities_and_services_keywords_meta')); ?>">

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
    <section class="top-block facilities-services">
        <h1 class="page-title"><?php the_field('facilities_and_services_page_title') ?></h1>
        <div class="breadcrumb">
            <ul class="breadcrumbs">
                <?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
            </ul>
        </div>
    </section>
    <section class="facilities-services-block">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">

            <?php $services = get_field('facilities_and_services_page_services');
            foreach ($services as $service) {
                ?>
                <a href="<?php
                if($service['facilities_and_services_page_services_link_picker']['postid']) {
                    the_permalink($service['facilities_and_services_page_services_link_picker']['postid']);
                }
                else {
                    echo $service['facilities_and_services_page_services_link_picker']['url'];
                }
                ?>" target="<?php echo $service['facilities_and_services_page_services_link_picker']['target']; ?>" class="item">
                <span class="img-block">
                    <img src="<?=$service['facilities_and_services_page_services_image']?>" alt="">
                </span>
                    <span class="text">
                        <?=$service['facilities_and_services_page_services_text']?>
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