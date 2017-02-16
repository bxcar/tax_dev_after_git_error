<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title><?php the_field('business_news_page_title_meta', 55) ?></title>
    <meta name="description" content="<?php the_field('business_news_page_description_meta', 55) ?>">
    <meta name="keywords" content="<?php the_field('business_news_page_keywords', 55) ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
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
        .current-cat a {
            color: #424242 !important;
        }

        span.current {
            width: 30px;
            height: 30px;
            margin: 0 5px;
            text-align: center;
            font-size: .75rem;
            font-weight: 400;
            line-height: 30px;
            display: inline-block;
            transition: all ease-in .2s;
            background-color: #3ca04f;
            color: #fff;
        }

        a.page-numbers,
        span.dots {
            width: 30px;
            height: 30px;
            margin: 0 5px;
            text-align: center;
            background-color: #f9fafb;
            color: #424242 !important;
            font-size: .75rem;
            font-weight: 400;
            line-height: 30px;
            display: inline-block;
            transition: all ease-in .2s;
        }

        a.next::before {
            content: url(/wp-content/themes/tax/img/next-post.png);
        }

        a.prev::before {
            content: url(/wp-content/themes/tax/img/prev-post.png);
            transform: scale(-1, 1);
        }

        .pagination a:hover,
        .pagination a:focus,
        .pagination a:active {
            background-color: #e1e3e6;
            text-decoration: none;
        }
    </style>

    <?php wp_head() ?>
</head>

<body>
<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block top-news">
        <h1 class="page-title"><?php the_field('business_news_page_title', 55) ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><span>Новости</span></li>
            </ul>
        </div>
    </section>
    <section class="blog-layaut">
        <div class="wrap">
            <div class="blog">

                <?php
                
                /* $args_last_news = array(
                     'numberposts' => -1,
                     'post_type' => 'tax_news',
                     'posts_per_page' => 1
                 );*/

                // query
                //                $the_query_last_news = new WP_Query($args_last_news);


                /*$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query_last_news = query_posts(
                    array(
                        'numberposts' => -1,
                        'post_type' => 'tax_news',
                        'posts_per_page' => get_field('business_news_page_amount_news_per_page'),
                        'paged' => $paged
                    )
                );*/
                
                

                /* if ($the_query_last_news->have_posts()) {
                     while ($the_query_last_news->have_posts()) {
                         $the_query_last_news->the_post(); */
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="item">
                            <img class="wow fadeInUp" data-wow-duration="1s" src="<?php the_field('news_image') ?>"
                                 alt="">
                            <div class="text-info wow fadeInUp" data-wow-duration="1s">
                                <div class="top">
                                    <div class="date"><?php echo get_the_date('j'); ?>
                                        <span><?php echo get_the_date('M'); ?>
                                    </div>
                                    <div class="blog-title"><?php the_title(); ?></div>
                                </div>
                                <div class="text"><?php the_field('news_quote') ?></div>
                                <div class="sub-info">
                                    <span class="author"><?php the_field('news_author') ?></span>
                                    <?php

                                    $cat = object_to_array(get_the_category());

                                    ?>
                                    <span class="themes"><?= $cat['0']['cat_name']; ?></span>
                                    <span class="view">10 просмотров</span>
                                    <span class="comment">2 комментария</span>
                                </div>
                                <a href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

                <div class="pagination wow fadeInUp" data-wow-duration="1s">
                    <ul>
                        <?php
                        $args_pagination = array(
                            'show_all' => false, // показаны все страницы участвующие в пагинации
                            'end_size' => 1,     // количество страниц на концах
                            'mid_size' => 1,     // количество страниц вокруг текущей
                            'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                            'prev_text' => __(''),
                            'next_text' => __(''),
                            'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                            'screen_reader_text' => __('Posts navigation'),
                        );

                        the_posts_pagination($args_pagination);
                        wp_reset_query();

                        ?>
                    </ul>
                </div>
            </div>
            <div class="sidebar">
                <div class="search wow fadeInUp" data-wow-duration="1s">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
                        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"
                               placeholder="Поиск...">
                        <input type="submit" id="searchsubmit">
                    </form>
                </div>
                <div class="category wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title"><?php the_field('business_news_page_title_category', 55) ?></div>
                    <ul>
                        <li class="all-item">
                            <a href="<?= get_permalink(55);?>" >Все новости</a>
                        </li>
                        <?php

                        $args = array(
                            'show_option_all' => '',
                            'show_option_none' => __('No categories'),
                            'orderby' => 'name',
                            'order' => 'DESC',
                            'show_last_update' => 0,
                            'style' => 'list',
                            'show_count' => 0,
                            'hide_empty' => 1,
                            'use_desc_for_title' => 1,
                            'child_of' => 0,
                            'feed' => '',
                            'feed_type' => '',
                            'feed_image' => '',
                            'exclude' => '1',
                            'exclude_tree' => '',
                            'include' => '',
                            'hierarchical' => true,
                            'title_li' => '',
                            'number' => NULL,
                            'echo' => 1,
                            'depth' => 0,
                            'current_category' => '',
                            'pad_counts' => 0,
                            'taxonomy' => 'category',
                            'walker' => 'Walker_Category',
                            'hide_title_if_empty' => false,
                            'separator' => '<br />',
                        );

                        wp_list_categories($args);
                        ?>
                    </ul>
                </div>
                <div class="pop-news wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title"><?php the_field('business_news_page_title_popular_news', 55) ?></div>
                    <a href="#" class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/p-news-1.jpg" alt="">
                        <p>Власти ухудшили прогноз роста экономики</p>
                        <div class="date">21 октября / Экономика</div>
                    </a>
                    <a href="#" class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/p-news-2.jpg" alt="">
                        <p>Прибыль Samsung упала на 30% из-за Galaxy Note 7</p>
                        <div class="date">20 октября / Новости компаний</div>
                    </a>
                    <a href="#" class="item">
                        <img src="<?php bloginfo('template_url'); ?>/img/p-news-3.jpg" alt="">
                        <p>Торги на биржах США завершились ростом</p>
                        <div class="date">19 октября / Финансы</div>
                    </a>
                </div>
                <div class="archive wow fadeInUp" data-wow-duration="1s">
                    <div class="sidebar-title"><?php the_field('business_news_page_title_archive', 55) ?></div>
                    <ul>
                        <?php $args_archives = array(
                            'type'            => 'monthly',
//                            'limit'           => 10,
                            'format'          => 'html',
                            'before'          => '',
                            'after'           => '',
                            'show_post_count' => false,
                            'echo'            => 1,
                            'post_type'       => 'tax_news'
                        );
                        wp_get_archives( $args_archives ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>