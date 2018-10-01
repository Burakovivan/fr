<?php
// News Shortcode

add_shortcode('news', 'hjemmesider_news');
function hjemmesider_news($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('order' => 'order', 'number' => - 1, 'cat' => 'cat', ), $atts));

    // define query parameters based on attributes

/* single post = news */
    if ( is_singular('news') ) {

    $options = array('post_type' => 'news', 'post__not_in' => array($post->ID), 'order' => $order, 'orderby' => 'date', 'posts_per_page' => $number, 'cat' => array($cat));

    }
/* pages, cat */
    else {

        $options = array('post_type' => 'news', 'order' => $order, 'orderby' => 'date', 'posts_per_page' => $number, 'cat' => array($cat));

    }

    $the_query = new WP_Query($options);
    $img_options = get_option( 'simple_news_settings' );

    // run the loop based on the query
    ?>
    <?php if ($the_query->have_posts()) { ?>
            <ul class="news__list">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>">
<?php if ( 0 == $img_options['simple_news_select_field_0'] ) { ?>
<?php the_post_thumbnail('news_plugin_small', array('class' => 'sn-img-small')); ?>
<?php } ?>

<?php if ( 1 == $img_options['simple_news_select_field_0'] ) { ?>
<?php the_post_thumbnail('news_plugin_small', array('class' => 'sn-img-small')); ?>
<?php } ?>

<?php if ( 2 == $img_options['simple_news_select_field_0'] ) { ?>
<?php the_post_thumbnail('news_plugin_medium', array('class' => 'sn-img-medium')); ?>
<?php } ?>

<?php if ( 3 == $img_options['simple_news_select_field_0'] ) { ?>
<?php the_post_thumbnail('news_plugin_large', array('class' => 'sn-img-large')); ?>
<?php } ?>

<?php if ( 4 == $img_options['simple_news_select_field_0'] ) { ?>
<?php the_post_thumbnail('news_plugin_full', array('class' => 'sn-img-full')); ?>
<?php } ?>
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
            </a></li>
            <?php endwhile; wp_reset_postdata(); ?>
            </ul>
            <?php } ?>
    <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }