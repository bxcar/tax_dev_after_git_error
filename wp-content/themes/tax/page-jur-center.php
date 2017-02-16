<?php
/**
 * Template Name: jur-center
 */
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('jur_centers_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('jur_centers_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('jur_centers_keywords_meta')); ?>">

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
    <section class="top-block top-jur-center">
        <h1 class="page-title"><?php the_field('jur_centers_page_title') ?></h1>
        <div class="breadcrumb">
            <ul class="breadcrumbs">
                <?php if(function_exists('bcn_display_list')) { bcn_display_list(); }?>
            </ul>
        </div>
    </section>
    <section class="flags-info jur-center-info">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">

            <!-- NEXT FIELDS COPY FROM CONVENIENCE FLAGS-->
            <?php $regions_all_block = get_field('convenience_flags_page_regions');
            foreach ($regions_all_block as $region_single_column) {
                ?>
                <div class="item">
                    <?php $region_single_column_all_block = $region_single_column['convenience_flags_page_regions_punkts_in_one_column'];
                    //repeater field in repeater field
                    foreach ($region_single_column_all_block as $region_single_column_single_block) {
                        ?>
                        <div class="title-item">
                            <?=$region_single_column_single_block['convenience_flags_page_regions_punkts_in_one_column_title']?>
                        </div>

                        <?php $region_single_column_single_block_all_punkts = $region_single_column_single_block['convenience_flags_page_regions_punkts_in_one_column_description'];
                        //repeater field in repeater field in repeater field (too complicated, but it works:))
                        foreach ($region_single_column_single_block_all_punkts as $region_single_column_single_block_single_punkts) {
                            ?>
                            <a href="<?php
                            if($region_single_column_single_block_single_punkts['convenience_flags_page_regions_punkts_in_one_column_description_link_picker']['postid']) {
                                the_permalink($region_single_column_single_block_single_punkts['convenience_flags_page_regions_punkts_in_one_column_description_link_picker']['postid']);
                            }
                            else {
                                echo $region_single_column_single_block_single_punkts['convenience_flags_page_regions_punkts_in_one_column_description_link_picker']['url'];
                            }
                            ?>" target="<?php echo $region_single_column_single_block_single_punkts['convenience_flags_page_regions_punkts_in_one_column_description_link_picker']['target']; ?>">
                                <?=$region_single_column_single_block_single_punkts['convenience_flags_page_regions_punkts_in_one_column_description_text']?>
                            </a>
                            <?php
                        }
                    }
//                    convenience_flags_page_regions_punkts_in_one_column_description_link_picker
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <section class="feadback-form flags-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form"><?php the_field('jur_centers_page_gc_title') ?></div>

            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="Центры юрисдикций - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                <input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('jur_centers_page_gc_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email" placeholder="<?php the_field('jur_centers_page_gc_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('jur_centers_page_gc_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('jur_centers_page_gc_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php"?>

        </div>
    </section>
    <section class="more-services more-flags more-jur-center wow fadeInUp" data-wow-duration="1s">
        <div class="title"><?php the_field('jur_centers_page_other_offers_title') ?></div>
        <div class="wrap">
            <div class="owl-carousel carousel-5">

                <?php $other_offers = get_field('jur_centers_page_other_offers_punkts');
                foreach ($other_offers as $other_offer) {
                    ?>
                    <div>
                        <a href="<?php
                        if($other_offer['jur_centers_page_other_offers_punkts_link_picker']['postid']) {
                            the_permalink($other_offer['jur_centers_page_other_offers_punkts_link_picker']['postid']);
                        }
                        else {
                            echo $other_offer['jur_centers_page_other_offers_punkts_link_picker']['url'];
                        }
                        ?>" target="<?php echo $other_offer['jur_centers_page_other_offers_punkts_link_picker']['target']; ?>" class="item">
                <span class="img-block">
                    <img src="<?= $other_offer['jur_centers_page_other_offers_punkts_image']?>" alt="">
                </span>
                            <span class="text">
                                <?= $other_offer['jur_centers_page_other_offers_punkts_text']?>
                            </span>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
