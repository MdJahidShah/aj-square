<?php 
/*
 Template Name: Service Page
*/
get_header();?>

<main class="services-area">
    <section class="container single-page py-3 ">
        <div class="row" id="aj-square-content">
            <div class="col-sm-8 px-1">
                <div class="row d-flex flex-wrap">
                    <?php 
                    // The Loop to display services
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => -1, // Display all services
                    );
                    $services_query = new WP_Query($args);
                    
                    if ($services_query->have_posts()) :
                        while ($services_query->have_posts()) : $services_query->the_post(); ?>
                            <article class="col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('post-thumbnails img-fluid'); ?>
                                    </div>
                                <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p><?php _e('No services found.', 'aj-square'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="page-nav" id="page_navigation">
                    <?php if ('ajs_pagenav') {ajs_pagenav(); } else{ ?>
                    <?php next_posts_link(); ?>
                    <?php previous_posts_link(); ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer()?>