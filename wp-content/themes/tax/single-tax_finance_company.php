<?php
/**
 * Template Name: tax_finance_company
 */
?>
<?php
// args
$args = array(
    'numberposts' => -1,
    'post_type' => 'tax_finance_company',
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
    <? wp_head(); ?>
    <style>
        .content-wrap blockquote {
            background-color: #fcfcfd;
            padding: 40px 40px 38px;
            margin-top: 25px;
            margin-bottom: 25px;
            color: #424242 !important;
        }

        .content-wrap blockquote p {
            color: #424242 !important;
        }

        .content-wrap > ul,
        .content-wrap > ol {
            list-style: none;
        }

        .content-wrap > ul {
            margin-bottom: 30px;
        }


        .content-wrap div > ul,
        .content-wrap div > ol {
            list-style: none;
        }
        
        p + ol {
            margin-top: -15px;
        }

        .content-wrap div > ul {
            margin-bottom: 30px;
        }

        .content-wrap strong {
            font-weight: 700;
        }

        .content-wrap li {
            color: #928f8f;
            font-size: .8125rem;
            font-weight: 400;
            line-height: 28px;
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

        .content-wrap ol li::before {
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
            line-height: 31px;
        }

        h3::before {
            content: '';
            width: 5px;
            height: 14px;
            background-color: #3ca04f;
            display: inline-block;
            margin-right: 10px;
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
<?php get_header() ?>
<!-- Content -->
<main>
    <section class="top-block top-finance-companies">
        <h1 class="page-title"><?php the_field('tax_finance_companies_title_page') ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url');?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url');?>/finance_companies">Финансовые компании</a></li>
                <li><span><?php the_title();?></span></li>
            </ul>
        </div>
    </section>
    <section class="fin-companies-info">
        <div class="subtitle wow fadeInUp"
             data-wow-duration="1s"><?php the_field('tax_finance_companies_title_company') ?></div>
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
</main>
<!-- End content -->
<?php get_footer(); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
