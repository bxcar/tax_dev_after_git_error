<!--##########################-->
<ul>
    <li> <?= get_post_meta(get_the_ID(), 'page_title', true); ?></li>
    <li><?= get_field('page_title', get_the_ID(), false) ?></li>
    <li><?php the_field('page_title', get_the_ID(), false) ?></li>
    <li></li>
    <li></li>
</ul>

<?php $images = get_field('main_gallery');
foreach ($images as $image) {
    ?>
    <img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= $image['id'] ?>">
    <?php
}

//            var_dump(get_field('main_sources'));
$sources = get_field('main_sources');
echo '<ul>';
foreach ($sources as $src) {
    ?>
    <li><strong><?= $src['main_src_title'] ?></strong> - <?= $src['main_src_description'] ?></li>
    <?php
}
echo '</ul>';

//            var_dump(get_field_objects());

$fields = get_field_objects();

foreach ($fields as $field) {
    if($field['type'] == 'text') {
        ?>
        <strong><?= $field['label'] ?>:</strong> <span><?= $field['value'] ?></span>
        <br>
        <?php
    }
}

$article_id = get_field('main_article');

$args = array(
    'post_type' => 'page',
    'posts_per_page' => 10,
    'meta_query' => array(
        array(
            'key' => 'main_article',
            'value' => $article_id
        )
    )
);

$wp_query = new WP_Query($args);

if ($wp_query->have_posts()) {
    ?>
    <div class="container">
        <?php
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $post_id = get_the_ID();
            ?>
            <article class="article">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <?php the_excerpt(); ?>
            </article>
            <?php
        }
        ?>
    </div>
    <?php
    wp_reset_query();
}

//            var_dump(get_field('site_color', 'option'));
$description = get_field('site_subheader', 'option');
echo $description;
echo "<br>";
echo get_field('site_copyright', 'option');
?>
<!--<style>
                body {
                    background: <?/*= get_field('site_color', 'option'); */?>
                }
            </style>-->
<br><br>
<!--##########################-->