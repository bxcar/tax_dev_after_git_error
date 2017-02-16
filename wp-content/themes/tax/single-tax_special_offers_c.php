<?php
/**
 * Template Name: tax_special_offers
 */
?>
<?php
// args
$args = array(
    'numberposts' => -1,
    'post_type' => 'tax_special_offers_c',
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

    <title><?php the_field('convenience_flag_page_title_meta'); ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('convenience_flag_page_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('convenience_flag_page_keywords_meta')); ?>">

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
    <style>
        .flags-vnutr-info blockquote {
            background-color: #fcfcfd;
            padding: 40px 40px 38px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .flags-vnutr-info  ul,
        .flags-vnutr-info  ol {
            margin-bottom: 30px;
            list-style: none;
        }
        .flags-vnutr-info ol ul {
            margin-bottom: 0;
        }


        .flags-vnutr-info ol {
            margin-bottom: 10px;
        }

        .flags-vnutr-info strong {
            font-weight: 700;
        }

        .flags-vnutr-info li {
            color: #928f8f;
            font-size: .8125rem;
            font-weight: 400;
            line-height: 26px;
        }

        .flags-vnutr-info ul > li:before {
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

        .flags-vnutr-info ul li ol li {
            list-style-type: none !important;
        }

        .flags-vnutr-info ol > li::before {
            counter-increment: myCounter;
            content: counter(myCounter);
            color: #424242;
            font-size: 1rem;
            font-weight: 700;
            line-height: 35px;
            font-family: georgia, sans-serif;
            padding-right: 10px;
        }

        .service-vnutr-info p {
            font-size: .8125rem;
            font-weight: 400;
            color: #928f8f;
            line-height: 22px;
            padding-bottom: 15px;
        }

        .service-vnutr-info p + ol {
            margin-top: -15px;
        }

        .offer-block-info h3 {
            color: #424242;
            font-family: georgia,sans-serif;
            font-size: 1.1875rem;
            font-weight: 700;
            line-height: 24px;
            padding-top: 6px;
            padding-bottom: 6px;
        }

        .offer-block-info h3::before {
            content: '';
            width: 5px;
            height: 14px;
            background-color: #3ca04f;
            display: inline-block;
            margin-right: 10px;
        }

        .offer-info p {
            color: #928f8f;
            font-size: .8125rem;
            font-weight: 400;
            line-height: 22px;
            padding-top: 20px;
        }

        blockquote p {
            color: #424242 !important;
        }
    </style>

    <?php wp_head() ?>
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block special-offer">
        <h1 class="page-title">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url');?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url');?>/special_offers">Специальные предложения</a></li>
                <?php if(get_field('tax_parent_post')) { ?>
                    <li><a href="<?php
                        $parent_post_id = get_field('tax_parent_post');
                        echo get_permalink($parent_post_id);
                        ?>"><?php echo get_the_title($parent_post_id); ?></a></li>
                <?php } ?>
                <li><span><?php the_title();?></span></li>
            </ul>
        </div>
    </section>
    <section class="service-vnutr-info flags-vnutr-info offer-block-info">
        <div class="title wow fadeInUp" data-wow-duration="1s">
            <?php the_field('single_convenience_flag_title'); ?>
        </div>

        <?php the_content(); ?>

    </section>
    <section class="feadback-form order-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form"><?php the_field('convenience_flag_page_form_title'); ?></div>

            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="<?php the_field('single_convenience_flag_title'); ?> - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                <input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('single_convenience_flag_form_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email" placeholder="<?php the_field('single_convenience_flag_form_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('single_convenience_flag_form_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('single_convenience_flag_form_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php"?>

        </div>
    </section>
    <section class="more-offer more-flags-vnutr">
        <div class="wow fadeInUp" data-wow-duration="1s">
            <div class="title"><?php the_field('single_convenience_flag_other_flags_title'); ?></div>
            <div class="wrap">
                <div class="owl-carousel carousel-3">


                    <?php
                    $id = get_the_ID();

                    $args_last_convenience_flags = array(
                        'numberposts' => -1,
                        'post_type' => 'tax_special_offers',
                        'posts_per_page' => get_field('single_convenience_flag_other_flags_amount'),
                        'post__not_in' => array( $id ),
                        'orderby' => 'rand'
                    );

                    // query
                    $the_query_last_convenience_flags = new WP_Query($args_last_convenience_flags);
                    if ($the_query_last_convenience_flags->have_posts()) {
                        while ($the_query_last_convenience_flags->have_posts()) {
                            $the_query_last_convenience_flags->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="item">
                                <div class="item-wrap">
                                    <?php the_title(); ?>
                                </div>
                            </a>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
