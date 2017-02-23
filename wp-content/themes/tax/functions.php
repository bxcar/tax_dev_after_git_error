<?php
/**
 * tax functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tax
 */

/*update_option('siteurl', '192.168.0.98');
update_option('home', '192.168.0.98');*/

if (!function_exists('tax_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tax_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on tax, use a find and replace
         * to change 'tax' to the name of your theme in all the template files.
         */
        load_theme_textdomain('tax', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        //add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'tax'),
            'menu-2' => esc_html__('Offers', 'tax'),
            'menu-3' => esc_html__('News', 'tax'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('tax_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'tax_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tax_content_width()
{
    $GLOBALS['content_width'] = apply_filters('tax_content_width', 640);
}

add_action('after_setup_theme', 'tax_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tax_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'tax'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'tax'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Сustom_with_archives', 'tax'),
        'id' => 'custom-with-archives',
        'description' => esc_html__('Add widgets here.', 'tax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => esc_html__('Сustom_with_tags', 'tax'),
        'id' => 'custom-with-tags',
        'description' => esc_html__('Add widgets here.', 'tax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'tax_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tax_scripts()
{
    wp_enqueue_style('tax-style', get_stylesheet_uri());
    wp_enqueue_style('fonts.min', get_template_directory_uri() . '/css/fonts.min.css');
    // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    // wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style('main.min', get_template_directory_uri() . '/css/main.min.css');

    wp_enqueue_script('tax-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('tax-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tax_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Общие настройки сайта',
        'menu_title' => 'Общие настройки',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'manage_options',
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки заголовка сайта(кроме главной)',
        'menu_title' => 'Хедер(кроме главной)',
        'menu_slug' => 'header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки подвала сайта и email',
        'menu_title' => 'Футер и email',
        'menu_slug' => 'footer',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки ссылок соцсетей',
        'menu_title' => 'Ссылки на соцсети',
        'menu_slug' => 'socials',
        'parent_slug' => 'theme-general-settings',
    ));
}

function convenience_flag_table($atts = [])
{

    $table = '<script>
                    window.onload = function() {
                    var replaced_element = new Array();
                        replaced_element[0] = document.getElementsByClassName("capital");
                        replaced_element[1] = document.getElementsByClassName("country");
                        replaced_element[2] = document.getElementsByClassName("registration");
                        replaced_element[3] = document.getElementsByClassName("support");
                        replaced_element[4] = document.getElementsByClassName("tax");
                        for(var ix = 0; ix < 5; ix++) {
                        var element = replaced_element[ix];
                            for(var i = 0; i < element.length; i++)
                            {
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("до ",\'g\'),"<span>до </span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("более ",\'g\'),"<span>более </span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("от ",\'g\'),"<span>от </span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("USD",\'g\'),"<span>USD</span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("грн.",\'g\'),"<span>грн.</span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("грн",\'g\'),"<span>грн</span>");
                                element[i].innerHTML =element[i].innerHTML.replace(new RegExp("EUR",\'g\'),"<span>EUR</span>");
                            }
                        }
                    }
              </script>
    <div class="table wow fadeInUp" data-wow-duration="1s">';

    if (isset($atts['number'])) {
        $number = $atts['number'];
    }

    else {
        $number = 1;
    }
    $table_number = $number - 1;

    if (isset($atts['title'])) {
        $title = $atts['title'];
    }
    else {
        $title = true;
    }

    $new_array = array();

    $all_tables = get_field('single_convenience_flag_tables');
    /*ini_set('xdebug.var_display_max_depth', 100);
    ini_set('xdebug.var_display_max_children', 256);
    ini_set('xdebug.var_display_max_data', 1024);*/

    $single_table_klon_field = $all_tables[$table_number]['single_convenience_flag_tables_single'];
    $i = 0;
    foreach ($single_table_klon_field as $value) {

        $single_table = $value;

        $table_block = $single_table['single_convenience_flag_table'];
        if ($table_block) {
            $mas_table = array();
//            $i = 0;
            foreach ($table_block as $table_row) {
                $table_row_block = $table_row['single_convenience_flag_table_single_column'];

                if ($table_row_block) {
                    $amount_rows = count($table_row_block);
                    $mas_table = array();
                    for ($ix = 0; $ix < $amount_rows; $ix++) {
                        global $mas_table;
                        $mas_table[$i][$ix] = $table_row_block[$ix]['single_convenience_flag_table_single_column_punkts'];
                        $new_array[$i][$ix] = $mas_table[$i][$ix];
                    }
                }
                $i++;
            }
        }
    }

//    var_dump($new_array);

    $amount_colums = count($new_array[1]);

    for ($iq = 0; $iq < $amount_colums; $iq++) {
        if ($iq == 0 && $title) {
            $table .= '<div class="top row">';
        }
        elseif($iq == 0) {
            $table .= '<div class="row" style="border-top: 1px solid #e1e3e6;">';
        }
        else{
            $table .= '<div class="row">';
        }

        $for_gree_color_counter = 0;
        $counter_for_tax_capital_class = 0;
        //$i is amount of table columns
        foreach ($new_array as $single_col) {
            if ((get_current_template() == 'single-tax_serv_and_price.php') && ($for_gree_color_counter % $i == 0)) {
                $table .= '<div class="country">';
            }
            elseif ((get_current_template() == 'single-tax_serv_and_price.php') && ($for_gree_color_counter % $i == 1)) {
                $table .= '<div class="registration">';
            }
            elseif ((get_current_template() == 'single-tax_serv_and_price.php') && ($for_gree_color_counter % $i == 2)) {
                $table .= '<div class="support">';
            }
            elseif (((get_current_template() == 'single-tax_convenience_flag.php') || (get_current_template() == 'single-tax_finance_company.php')) && ($i == 2) && ($counter_for_tax_capital_class % 2 == 1)) {
                $table .= '<div class="tax">';
            }
            else {
                $counter_for_tax_capital_class++;
                $table .= '<div class="capital">';
            }
            $table .= $single_col[$iq];
            $table .= '</div>';
            $for_gree_color_counter++;
        }
        $table .= '</div>';
    }

    $table .= '</div>';
    return $table;
}

add_shortcode('table', 'convenience_flag_table');

//next field copy from single-convenience_flag
//use [table number=%table number%] instead table_serv
function serv_and_price_table()
{
    $table = '<script>
                    window.onload = function() {
                        var replaced_element = document.getElementsByClassName("registration");
                        var replaced_element_2 = document.getElementsByClassName("support");
                        var replaced_element_3 = document.getElementsByClassName("country");
                        for(var i = 0; i < replaced_element.length; i++)
                        {
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("до",\'g\'),"<span>до</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("до",\'g\'),"<span>до</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("до",\'g\'),"<span>до</span>");
                            
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("более",\'g\'),"<span>более</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("более",\'g\'),"<span>более</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("более",\'g\'),"<span>более</span>");
                            
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("от",\'g\'),"<span>от</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("от",\'g\'),"<span>от</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("от",\'g\'),"<span>от</span>");
                           
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("USD",\'g\'),"<span>USD</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("USD",\'g\'),"<span>USD</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("USD",\'g\'),"<span>USD</span>");
                           
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("грн.",\'g\'),"<span>грн.</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("грн.",\'g\'),"<span>грн.</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("грн.",\'g\'),"<span>грн.</span>");
                            
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("грн",\'g\'),"<span>грн</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("грн",\'g\'),"<span>грн</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("грн",\'g\'),"<span>грн</span>");
                            
                            replaced_element[i].innerHTML =replaced_element[i].innerHTML.replace(new RegExp("EUR",\'g\'),"<span>EUR</span>");
                            replaced_element_2[i].innerHTML =replaced_element_2[i].innerHTML.replace(new RegExp("EUR",\'g\'),"<span>EUR</span>");
                            replaced_element_3[i].innerHTML =replaced_element_3[i].innerHTML.replace(new RegExp("EUR",\'g\'),"<span>EUR</span>");
                        }
                    }
              </script>
    <div class="table price wow fadeInUp" data-wow-duration="1s">
                <div class="top row">
                    <div class="country">Страны</div>
                    <div class="registration">Регистрация</div>
                    <div class="support">Поддержка*</div>
                </div>
';

    $table_fields = get_field('single_convenience_flag_table');
    foreach ($table_fields as $table_field) {
        $table .= '<div class="row">';
        $table .= '<div class="country">' . $table_field['single_convenience_flag_table_country'] . '</div>';
        $table .= '<div class="registration">' . $table_field['single_convenience_flag_table_registration'] . '</div>';
        $table .= '<div class="support">' . $table_field['single_convenience_flag_table_registration'] . '</div>';
        $table .= '</div>';
    }

    $table .= '</div>';
    return $table;

}

add_shortcode('table_serv', 'serv_and_price_table');


function animation_start()
{
    return '<div class="wow fadeInUp" data-wow-duration="1s">';
}

add_shortcode('astart', 'animation_start');

function animation_end()
{
    return '</div>';
}

add_shortcode('aend', 'animation_end');

function new_raw()
{
    return '<br>';
}

add_shortcode('r', 'new_raw');


////////////
add_action('admin_menu', 'register_my_custom_menu_page');
function register_my_custom_menu_page()
{
    add_menu_page(
        'custom menu title', 'Контентные разделы', 'manage_options', 'custompage', 'my_custom_menu_page', 'dashicons-format-aside', 21.3
    );
    // Add a second submenu to the custom top-level menu:
    add_submenu_page('custompage', 'Новости', 'Новости', 8, '/edit.php?post_type=tax_news');
    add_submenu_page('custompage', 'Удобные флаги', 'Удобные флаги', 8, '/edit.php?post_type=tax_convenience_flag');
    add_submenu_page('custompage', 'Услуги и сервисы', 'Услуги и сервисы', 8, '/edit.php?post_type=tax_facilities_serv');
    add_submenu_page('custompage', 'Финансовые компании', 'Финансовые компании', 8, '/edit.php?post_type=tax_finance_company');
    add_submenu_page('custompage', 'Полезная информация', 'Полезная информация', 8, '/edit.php?post_type=tax_helpful_inf');
    add_submenu_page('custompage', 'Центры юрисдикций', 'Центры юрисдикций', 8, '/edit.php?post_type=tax_jur_centers');
    add_submenu_page('custompage', 'Дочерние центры юрисдикций', 'Дочерние центры юрисдикций', 8, '/edit.php?post_type=tax_jur_centers_ch');
    add_submenu_page('custompage', 'Услуги и цены', 'Услуги и цены', 8, '/edit.php?post_type=tax_serv_and_price');
    add_submenu_page('custompage', 'Специальные предложения', 'Специальные предложения', 8, '/edit.php?post_type=tax_special_offers');
    add_submenu_page('custompage', 'Дочерние специальные предложения', 'Дочерние специальные предложения', 8, '/edit.php?post_type=tax_special_offers_c');
    remove_submenu_page('custompage', 'custompage');

    add_menu_page(
        'custom taxonomy title', 'Таксономии', 'manage_options', 'customtaxonomies', 'my_custom_taxonomy_page', 'dashicons-list-view', 22.3
    );
    add_submenu_page('customtaxonomies', 'Категории - новости', 'Категории - новости', 8, '/edit-tags.php?taxonomy=customcat_for_tax_news');
    add_submenu_page('customtaxonomies', 'Категории - полезная информация', 'Категории - полезная информация', 8, '/edit-tags.php?taxonomy=category-helpful-information');
    add_submenu_page('customtaxonomies', 'Теги - полезная информация', 'Теги - полезная информация', 8, '/edit-tags.php?taxonomy=helpful-information-tags');
//    remove_submenu_page('customtaxonomies','customtaxonomies');
}

function my_custom_menu_page()
{
    echo "<h3>Выберите нужный вам раздел для редактирования, которые отображены слева в подменю данного раздела.</h3>";
}

function my_custom_taxonomy_page()
{
    echo "<h3>Выберите нужный вам раздел для редактирования, которые отображены слева в подменю данного раздела.</h3>";
}


function get_next_posts_link_custom($label = null, $max_page = 0)
{
    global $paged, $wp_query;

    if (!$max_page)
        $max_page = $wp_query->max_num_pages;

    if (!$paged)
        $paged = 1;

    $nextpage = intval($paged) + 1;

    if (null === $label)
        $label = __('Next Page &raquo;');

    if (!is_single() && ($nextpage <= $max_page)) {

        $attr = apply_filters('next_posts_link_attributes', '');

        return next_posts($max_page, false);
    }
}


function get_previous_posts_link_custom($label = null)
{
    global $paged;

    if (null === $label)
        $label = __('&laquo; Previous Page');

    if (!is_single() && $paged > 1) {

        $attr = apply_filters('previous_posts_link_attributes', '');

        return previous_posts(false);
    }
}


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

function object_to_array($data)
{
    if (is_array($data) || is_object($data)) {
        $result = array();
        foreach ($data as $key => $value) {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}


//post per page for archives
add_action('pre_get_posts', 'set_posts_per_page');
function set_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {

        if (get_queried_object()->taxonomy == 'customcat_for_tax_news' ||
            basename(get_page_template()) == 'single-tax_news.php' ||
            basename(get_page_template()) == 'search-tax_news.php' ||
            basename(get_search_template()) == 'search.php' ||
            basename(get_archive_template()) == 'archive-tax_news.php'
        ) {
            $query->set('posts_per_page', get_field('business_news_page_amount_news_per_page', 55));
        }

        else {
            $query->set('posts_per_page', get_field('helpful_information_page_amount_help_inf_per_page', 51));
        }
    }

    return $query;
}

//custom search
function template_chooser($template)
{
    global $wp_query;
    $post_type = get_query_var('post_type');
    if ($wp_query->is_search && $post_type == 'tax_news') {
        return locate_template('search-tax_news.php');  //  redirect to archive-search.php
    }

    if ($wp_query->is_search && $post_type == 'tax_helpful_inf') {
        return locate_template('search-tax_helpful_inf.php');
    }

    return $template;
}


add_filter('template_include', 'template_chooser');


//List archives by year, then month(work, but I use wp_custom_archive_new)
function wp_custom_archive($post_type_cust = 'post', $args = '')
{
    global $wpdb, $wp_locale;

    $defaults = array(
        'limit' => '',
        'format' => 'html', 'before' => '',
        'after' => '', 'show_post_count' => false,
        'echo' => 1
    );

    $r = wp_parse_args($args, $defaults);
    extract($r, EXTR_SKIP);

    if ('' != $limit) {
        $limit = absint($limit);
        $limit = ' LIMIT ' . $limit;
    }

    // over-ride general date format ? 0 = no: use the date format set in Options, 1 = yes: over-ride
    $archive_date_format_over_ride = 0;

    // options for daily archive (only if you over-ride the general date format)
    $archive_day_date_format = 'Y/m/d';

    // options for weekly archive (only if you over-ride the general date format)
    $archive_week_start_date_format = 'Y/m/d';
    $archive_week_end_date_format = 'Y/m/d';

    if (!$archive_date_format_over_ride) {
        $archive_day_date_format = get_option('date_format');
        $archive_week_start_date_format = get_option('date_format');
        $archive_week_end_date_format = get_option('date_format');
    }

    //filters
    $where = apply_filters('customarchives_where', "WHERE post_type = '$post_type_cust' AND post_status = 'publish'", $r);
    $join = apply_filters('customarchives_join', "", $r);

    $output = '<ul>';

    $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC $limit";
    $key = md5($query);
    $cache = wp_cache_get('wp_custom_archive', 'general');
    if (!isset($cache[$key])) {
        $arcresults = $wpdb->get_results($query);
        $cache[$key] = $arcresults;
        wp_cache_set('wp_custom_archive', $cache, 'general');
    }
    else {
        $arcresults = $cache[$key];
    }
    if ($arcresults) {
        $afterafter = $after;
        foreach ((array)$arcresults as $arcresult) {
            $url = get_month_link($arcresult->year, $arcresult->month) . '?post_type=' . $post_type_cust;
            $year_url = get_year_link($arcresult->year) . '?post_type=' . $post_type_cust;
            /* translators: 1: month name, 2: 4-digit year */
            $text = sprintf(__('%s'), $wp_locale->get_month($arcresult->month));
            $year_text = sprintf('%d', $arcresult->year);
            if ($show_post_count)
                $after = '&nbsp;(' . $arcresult->posts . ')' . $afterafter;
            $year_output = get_archives_link($year_url, $year_text, $format, $before, $after);
            $output .= ($arcresult->year != $temp_year) ? $year_output : '';
            $output .= get_archives_link($url, $text, $format, $before, $after);

            $temp_year = $arcresult->year;
        }
    }

    $output .= '</ul>';

    if ($echo)
        echo $output;
    else
        return $output;
}

//   /List archives by year, then month(work, but I use wp_custom_archive_new)


//another function for custom display archives
function wp_custom_archive_new($post_type_cust = 'post')
{
    global $wpdb;
    $year_prev = null;
    $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
								YEAR( post_date ) AS year,
								COUNT( id ) as post_count FROM $wpdb->posts
								WHERE post_status = 'publish' and post_date <= now( )
								and post_type = '$post_type_cust'
								GROUP BY month , year
								ORDER BY post_date DESC");
    foreach ($months as $month) :
        $year_current = $month->year;
        if ($year_current != $year_prev) {
            if ($year_prev != null) {
                ?>
                </ul>
            <?php } ?>
            <a href="<?= get_home_url() . '/' . $month->year . '?post_type=' . $post_type_cust ?>"
               class="archive-year"><?php echo $month->year; ?></a><br>

            <div id="archive-by-month" class="archive-year-span">
                <span>(по месяцам)</span>
                <img id="transform-right-arrow-arch-by-month"
                     src="<?php bloginfo('template_url') ?>/img/right-arrow.png">
            </div>

            <ul class="archive-month-list" class="archive-list" id="archive-by-month-block-hidden" style="display: none;">
        <?php }
        $monthes = array(
            1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель',
            5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август',
            9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
        );
        ?>
        <li>
            <a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) . '?post_type=' . $post_type_cust ?>">
                <span
                    class="archive-month"><?php echo $monthes[date("n", mktime(0, 0, 0, $month->month, 1, $month->year))] ?></span>
                <!--            <span class="archive-count">--><?php //echo $month->post_count;
                ?><!--</span>-->
            </a>
        </li>
        <?php $year_prev = $year_current;
    endforeach; ?>
    </ul>
    <?php
}


//c
function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    //var_dump($comment);
    if ($comment->comment_parent) {
        switch ($comment->comment_type) :
            case '' :
//                echo $comment->comment_parent;
                ?>
                <li <?php comment_class('comment answer'); ?> id="li-comment-<?php comment_ID() ?>">
                    <div class="comment-wrap" id="comment-<?php comment_ID(); ?>">
                        <div class="user-img">
                            <?php echo get_avatar($comment->comment_author_email, $args['avatar_size']); ?>
                        </div>

                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                        <?php printf(__('<cite class="fn name">%s</cite>'), get_comment_author_link()) ?>

                        <div class="date"><?php printf(__('%1$s'), get_comment_date('j F Y'), '') ?></div>

                        <?php comment_text() ?>
                        <?php //edit_comment_link(__('Редактировать'), ' ');
                        ?>

                        <?php if ($comment->comment_approved == '0') : ?>
                            <div
                                class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
                            <br/>
                        <?php endif; ?>
                    </div>
                </li>
                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    }

    else {
        switch ($comment->comment_type) :
            case '' :
                ?>
                <li <?php comment_class('comment'); ?> id="li-comment-<?php comment_ID() ?>">
                    <div class="comment-wrap" id="comment-<?php comment_ID(); ?>">
                        <div class="user-img">
                            <?php echo get_avatar($comment->comment_author_email, $args['avatar_size']); ?>
                        </div>

                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                        <?php printf(__('<cite class="fn name">%s</cite>'), get_comment_author_link()) ?>

                        <div class="date"><?php printf(__('%1$s'), get_comment_date('j F Y'), '') ?></div>

                        <?php comment_text() ?>
                        <?php //edit_comment_link(__('Редактировать'), ' ');
                        ?>

                        <?php if ($comment->comment_approved == '0') : ?>
                            <div
                                class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
                            <br/>
                        <?php endif; ?>
                    </div>
                </li>

                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    }
}

add_filter('comment_reply_link', 'replace_reply_link_class');


//comment form button
function awesome_comment_form_submit_button($button)
{
    $button =
        '<input name="submit" type="submit" class="submit" id="submit" value="Отправить" />'; /*.
        get_comment_id_fields();*/
    return $button;
}

add_filter('comment_form_submit_button', 'awesome_comment_form_submit_button');


//move comment textarea to bottom
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');


// add a new default avatar to the list in WordPress admin   ---I use plugin instead bottom code--
/*function mytheme_addgravatar( $avatar_defaults ) {
    $myavatar = get_bloginfo('template_directory') . '/img/user-default.jpg';
//    $myavatar = 'http://front.dizz.in.ua/tax/img/user-default.jpg';
    $avatar_defaults[$myavatar] = 'New Default Gravatar';
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'mytheme_addgravatar' );*/


// THIS MUST BE DELETED ON REAL HOST
/*add_filter( 'get_avatar', 'so_14088040_localhost_avatar', 10, 5 );

function so_14088040_localhost_avatar( $avatar, $id_or_email, $size, $default, $alt )
{
    $whitelist = array( 'localhost', '192.168.0.98' );

    if( !in_array( $_SERVER['SERVER_ADDR'] , $whitelist ) )
        return $avatar;

    $doc = new DOMDocument;
    $doc->loadHTML( $avatar );
    $imgs = $doc->getElementsByTagName('img');
    if ( $imgs->length > 0 )
    {
        $url = urldecode( $imgs->item(0)->getAttribute('src') );
        $url2 = explode( 'd=', $url );
        $url3 = explode( '&', $url2[1] );
        $avatar= "<img src='{$url3[0]}' alt='' class='avatar avatar-64 photo' height='64' width='64' />";
    }

    return $avatar;
}*/

//     /THIS MUST BE DELETED ON REAL HOST

// /add a new default avatar to the list in WordPress admin


function replace_reply_link_class($class)
{
    $class = str_replace("class='comment-reply-link", "class='answer-link", $class);
    return $class;
}

add_filter('comment_text', 'stefan_wrap_comment_text', 1000);

function stefan_wrap_comment_text($class)
{
    $class = str_replace("<p>", "<div class='text'>", $class);
    $class = str_replace("</p>", "</div>", $class);
    return $class;
}

/**
 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
 * @param  $number int Число на основе которого нужно сформировать окончание
 * @param  $ending_arr  array Массив слов с правильными окончаниями для чисел (1, 2, 5),
 *         например array('комментарий', 'комментария', 'комментариев')
 * @return string
 */
function get_num_ending($number, $ending_arr)
{
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        $ending = $ending_arr[2];
    }
    else {
        $i = $number % 10;
        switch ($i) {
            case (1):
                $ending = $ending_arr[0];
                break;
            case (2):
            case (3):
            case (4):
                $ending = $ending_arr[1];
                break;
            default:
                $ending = $ending_arr[2];
        }
    }
    return $ending;
}

/**
 * Фильтр к стандартной функции WordPress comments_number()
 * Возвращает строку с количеством комментариев к статье
 * с правильными окончаниями слова "комментарий" (1 комментарий, 2 комментария, 5 комментариев)
 */
function comments_number_ru()
{
    global $id;
    $number = get_comments_number($id);

    if ($number == 0) {
        $output = 'Комментариев нет';
    }
    else {
        $output = '' . $number . ' ' . get_num_ending($number, array('комментарий', 'комментария', 'комментариев'));
    }
    echo $output;
}

add_filter('comments_number', 'comments_number_ru');


//custom function for number of post views drom plugin wp-postViews
function get_the_views_custom($display = true, $prefix = '', $postfix = '', $always = false)
{
//    $post_views = strip_tags(bawpvc_views_sc(get_the_ID()));
    $post_views = intval(get_post_meta(get_the_ID(), 'views', true));
//    $post_views = intval(do_shortcode("[post_view]"));
//    $post_views = intval(get_post_meta(get_the_ID(), 'post_views_count', true));
    $views_options = get_option('views_options');
    if ($always || should_views_be_displayed($views_options)) {
        $output = number_format_i18n($post_views);
        return $output . ' ' . get_num_ending($output, array('просмотр', 'просмотра', 'просмотров'));
//        return $output;
    }
}


//define coordinate in admin panel for pulls dot on finance company
function custom_admin_js()
{
    echo '"<script>
                document.querySelector(\'[data-name="tax_finance_companies_image"] img\').addEventListener(\'click\', function(event){
                
                //(event.offsetX / this.width * 100) +\'x\'+ (event.offsetY / this.height * 100);
                
                var x_input = document.querySelector(\'[id="x-coord"] input\');
                var x = event.offsetX / this.width * 100;
                x_input.setAttribute("value", x.toString());
                
                var y_input = document.querySelector(\'[id="y-coord"] input\');
                var y = event.offsetY / this.height * 100;
                y_input.setAttribute("value", y.toString());
                
                }, false)

           </script>"';
    echo '"<style>
                #edit-slug-button,
                #edit-slug-buttons,
                .acf-fields > .table-hidden,
                .acf-field-588e73b7e86df {  /*table in services and price*/
                    display: none;
                }
                #wp-link #link-selector #search-panel li span.item-title {
                width: 70% !important;
                min-height: 70px;
                }
                
                #wp-link #link-selector #search-panel li span.item-info {
                width: 30% !important;
                min-height: 70px;
                }
           </style>"';
}

add_action('admin_footer', 'custom_admin_js');

//delete parameters from url(I use for breadcrumbs on search page)
function deleteGET($url, $name, $amp = true)
{
    $url = str_replace("&amp;", "&", $url); // Заменяем сущности на амперсанд, если требуется
    list($url_part, $qs_part) = array_pad(explode("?", $url), 2, ""); // Разбиваем URL на 2 части: до знака ? и после
    parse_str($qs_part, $qs_vars); // Разбиваем строку с запросом на массив с параметрами и их значениями
    unset($qs_vars[$name]); // Удаляем необходимый параметр
    if (count($qs_vars) > 0) { // Если есть параметры
        $url = $url_part . "?" . http_build_query($qs_vars); // Собираем URL обратно
        if ($amp) $url = str_replace("&", "&amp;", $url); // Заменяем амперсанды обратно на сущности, если требуется
    }
    else $url = $url_part; // Если параметров не осталось, то просто берём всё, что идёт до знака ?
    return $url; // Возвращаем итоговый URL
}


//for current template page, i use in search.php
add_filter('template_include', 'var_template_include', 1000);
function var_template_include($t)
{
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template($echo = false)
{
    if (!isset($GLOBALS['current_theme_template']))
        return false;
    if ($echo)
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}