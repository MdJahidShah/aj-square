<?php
// Shortcode Function

// Basic shortcode function example
function ajsquare_shortcode_function() {
    // Example shortcode function
    return '<div class="ajsquare-shortcode">This is a shortcode output.</div>';
}
add_shortcode('ajsquare_shortcode', 'ajsquare_shortcode_function');
// Add more shortcode functions as needed  

// Button Shortcode Function
function ajsquare_button_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'url' => '#',
            'class' => 'shortcodebtn',
        ),
        $atts,
        'button'
    );

    return '<a href="' . esc_url($atts['url']) . '" class="' . esc_attr($atts['class']) . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'ajsquare_button_shortcode');

// Shortcode for Service posts
function ajs_service_shortcode($atts) {
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ));
    if ($query->have_posts()) { ?>
    <?php $myvariable = ob_clean();?>
        <div class="row d-flex flex-wrap py-3">
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                    <article class="col-sm-6 mb-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                       <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail( 'post-thumbnails img-fluid' ); ?>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'No services found.', 'aj-square' ); ?></p>
            <?php endif; ?>
        </div>
        <div class="page-nav" id="page_navigation">
            <?php if ('ajs_pagenav') {ajs_pagenav(); } else{ ?>
            <?php next_posts_link(); ?>
            <?php previous_posts_link(); ?>
            <?php } ?>
        </div>

    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode('service', 'ajs_service_shortcode');

// Shortcode of Custom Post Type
function ajs_custom_post_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'post_type' => 'post',
            'posts_per_page' => 5,
        ),
        $atts,
        'custom_post'
    );

    $query = new WP_Query(array(
        'post_type' => $atts['post_type'],
        'posts_per_page' => $atts['posts_per_page'],
    ));

    if ($query->have_posts()) {
        $output = '<div class="ajsquare-custom-posts">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<h2>' . get_the_title() . '</h2>';
            $output .= '<div>' . get_the_excerpt() . '</div>';
        }
        $output .= '</div>';
        wp_reset_postdata();
        return $output;
    } else {
        return '<p>No posts found.</p>';
    }
}
add_shortcode('custom_post', 'ajs_custom_post_shortcode');
?>