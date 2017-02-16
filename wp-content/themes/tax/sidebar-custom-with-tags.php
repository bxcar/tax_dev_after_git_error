<?php
if (!is_active_sidebar('sidebar-custom')) {
    return;
}
?>
<style>
    .tag:hover {
        text-decoration: none;
        background: #FBFBFB;
        color: #aeacac !important;
    }

    .tag {
        text-decoration: none !important;
    }
</style>
<div class="sidebar" style="width: 310px;">
    <div class="search wow fadeInUp" data-wow-duration="1s">
        <form name="searchform" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>" onsubmit="return validate_form ();">
            <input style="border-radius: 0;" type="text" value="<?php echo get_search_query() ?>" name="s" id="s"
                   placeholder="Поиск...">
            <input type="hidden" name="post_type" value="tax_helpful_inf"/> <!-- // hidden 'tax_helpful_inf' value -->
            <input type="submit" id="searchsubmit">
        </form>
        <script type="text/javascript">
            <!--

            function validate_form ()
            {
                var valid = true;

                if ( document.searchform.s.value.trim() == "" )
                {
                    document.location.href = '<?= home_url().'/helpful_information'?>';
                    valid = false;
                }

                return valid;
            }

            //-->
        </script>
    </div>
    <?php if (basename(get_current_template()) != 'single-tax_helpful_inf.php') { ?>
        <div class="category wow fadeInUp" data-wow-duration="1s">
            <div class="sidebar-title">
                <a class="display_cat_arch" id="link-display-cat">
                    <?php the_field('helpful_information_page_title_category', 51) ?>&nbsp;
                    <img id="transform-right-arrow" src="<?php bloginfo('template_url') ?>/img/right-arrow.png">
                </a>
            </div>
            <ul id="cat-hidden-block" style="display: none">
                <li class="all-item">
                    <a href="<?= get_permalink(51); ?>">Все записи</a>
                </li>
                <?php

                $args = array(
                    'show_option_all' => '',
                    'show_option_none' => '',
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
                    'taxonomy' => 'category-helpful-information',
                    'walker' => 'Walker_Category',
                    'hide_title_if_empty' => false,
                    'separator' => '<br />',
                );

                wp_list_categories($args);
                ?>
            </ul>
        </div>
    <?php } ?>
    <div class="tags wow fadeInUp" data-wow-duration="1s">
        <div class="sidebar-title">Тэги</div>
        <a class="tag" href="<?php get_template_directory_uri(); ?>/helpful_information">Все записи</a>
        <?php

//        add_action( 'init', 'wpse27111_tester', 999 );
//        function wpse27111_tester()
//        {
//            $terms = get_terms();
//            return $terms;
//        }

        $terms = get_terms();
        $terms = object_to_array($terms);
        
        foreach ($terms as $term) {
            if($term['taxonomy'] == 'helpful-information-tags') {
                ?>
                <a class="tag"
                   href="<?= get_term_link($term['term_id']); ?>"><?= $term['name'] ?></a>
                <?php
            }
        }
        ?>
    </div>
</div>