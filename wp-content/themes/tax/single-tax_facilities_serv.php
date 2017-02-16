<?php
/**
 * Template Name: tax_facilities_serv
 */
?>
<?php
// args
$args = array(
    'numberposts' => -1,
    'post_type' => 'tax_facilities_serv',
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

    <title><?php the_field('single_facilities_services_title_meta') ?></title>
    <meta name="description" content="<?= str_replace("\"", "'", get_field('single_facilities_services_description_meta')); ?>">
    <meta name="keywords" content="<?= str_replace("\"", "'", get_field('single_facilities_services_keywords_meta')); ?>">

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
        .facilities-services-info blockquote {
            background-color: #fcfcfd;
            padding: 40px 40px 38px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .facilities-services-info ul,
        .facilities-services-info ol {
            margin-bottom: 30px;
            list-style: none;
        }

        .facilities-services-info strong {
            font-weight: 700;
        }

        .facilities-services-info li {
            color: #424242;
            font-size: .8125rem;
            font-weight: 400;
            line-height: 34px;
        }

        .facilities-services-info li:before {
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

        .facilities-services-info p {
            font-size: .8125rem;
            font-weight: 400;
            color: #928f8f;
            line-height: 22px;
            padding-bottom: 15px;
        }

        @media (max-width: 480px) {
            .facilities-services-info > .wrap .item .title br {
                display: none;
            }
        }
    </style>

    <?php wp_head() ?>
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block facilities-services">
        <h1 class="page-title">Услуги и сервисы</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo get_bloginfo('url');?>">Главная</a></li>
                <li><a href="<?php echo get_bloginfo('url');?>/facilities_and_services">Услуги и сервисы</a></li>
                <li><span><?php the_title();?></span></li>
            </ul>
        </div>
    </section>
    <section class="facilities-services-info">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="item">
                <?php if(get_field('single_facilities_services_page_description_image')) { ?>
                    <img src="<?php the_field('single_facilities_services_page_description_image') ?>" alt="">
                <?php } ?>
            </div>
            <div class="item">
                <div class="title"><?php the_field('single_facilities_services_page_subtitle') ?></div>
                <?php the_field('single_facilities_services_page_description') ?>
            </div>
        </div>
    </section>
    <section class="feadback-form order-form wow fadeInUp" data-wow-duration="1s">
        <div class="form-wrap">
            <div class="title-form"><?php the_field('single_facilities_services_page_o_title') ?></div>

            <form id="static-form" method="post">
                <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="<?php the_field('single_facilities_services_page_subtitle') ?> - статичная форма">
                <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                <input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('single_facilities_services_page_o_placeholder1') ?>">
                <input style="color: #fff" required name="email" type="email" placeholder="<?php the_field('single_facilities_services_page_o_placeholder2') ?>">
                <textarea name="text" placeholder="<?php the_field('single_facilities_services_page_o_placeholder3') ?>"></textarea>
                <input id="submit-static-form" type="submit" value="<?php the_field('single_facilities_services_page_o_button_text') ?>">
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
            <?php include_once "js/static-form-ajax.php"?>

        </div>
    </section>
    <section class="more-services wow fadeInUp" data-wow-duration="1s">
        <div class="title"><?php the_field('single_facilities_services_page_social_title') ?></div>
        <div class="wrap">
            <div class="owl-carousel carousel-4">

                <?php
                $p = get_the_permalink();
                $permalink = $p;
                $a = get_field('single_facilities_services_page_other_services_amount');
                $amount_limit = $a;
                $i = 0;


                $args_last_facilities_serv = array(
                    'page_id' => '47',
                );

                // query
                $the_query_last_facilities_serv = new WP_Query($args_last_facilities_serv);
                if ($the_query_last_facilities_serv->have_posts()) {
                    while ($the_query_last_facilities_serv->have_posts()) {
                        $the_query_last_facilities_serv->the_post(); ?>


                        <?php $services = get_field('facilities_and_services_page_services');
                        foreach ($services as $service) {
                            if(($permalink == $service['facilities_and_services_page_services_link_picker']['url']) ||
                                ($permalink == get_permalink($service['facilities_and_services_page_services_link_picker']['postid']))) {
                                continue;
                            }
                            $i++;
                            if($i > $amount_limit) {
                                break;
                            }
                            ?>
                            <a href="<?php
                            if($service['facilities_and_services_page_services_link_picker']['postid']) {
                                the_permalink($service['facilities_and_services_page_services_link_picker']['postid']);
                            }
                            else {
                                echo $service['facilities_and_services_page_services_link_picker']['url'];
                            }
                            ?>" target="<?php echo $service['facilities_and_services_page_services_link_picker']['target']; ?>"
                               class="item">
                                <?php if($service['facilities_and_services_page_services_image']) {?>
                            <span class="img-block">
                                <img src="<?=$service['facilities_and_services_page_services_image']?>" alt="">
                            </span>
                                <?php } ?>
                                <span class="text">
                                    <?=$service['facilities_and_services_page_services_text']?>
                                </span>
                            </a>
                            <?php
                        }
                        ?>


                    <?php }
                } ?>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>