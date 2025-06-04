<?php 
/*
	Template Name: My Blog
*/

get_header(); ?>
<main>
    <?php get_template_part('template-parts/content', get_post_format());?>
</main>
<main>
    <section class="container-fluid">
        <div class="wrap latestpost">
            <div class="col">
                <?php get_template_part('/template-parts/content', get_post_format()); ?>
            </div>

            <div class="pagination col">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // Create a custom query for pagination
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => $paged
                );

                $the_query = new WP_Query($args);

                $big = 999999999; // Need an unlikely integer
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $the_query->max_num_pages
                ));

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('upper_footer'); ?>
<?php get_footer(); ?>
