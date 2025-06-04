<?php get_header(); ?>

<section class="container py-3 content-archive author-archive ">
    <div class="row py-3">
        <div class="col-md-4 author d-flex justify-content-center align-items-start">
            <div class="author-info text-center p-4 border rounded shadow-sm bg-light">
                <?php
                    $author_id = get_the_author_meta('ID');
                    $author_name = get_the_author();
                    $author_description = get_the_author_meta('description');
                    $author_avatar = get_avatar($author_id, 120, '', '', array('class' => 'rounded-circle shadow-sm mb-3'));
                ?>
                
                <div class="col author-avatar mb-3">
                    <?php echo $author_avatar; ?>
                </div>
                <div>
                    <h4 class="author-name mb-2 text-primary"><?php echo esc_html($author_name); ?></h4>
                    <p class="author-description text-muted"><?php echo esc_html($author_description); ?></p>
                </div>
                <div class="author-social-links">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="mx-2"><a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>" class="text-decoration-none text-primary">Posts</a></li>
                        <li class="mx-2"><a href="<?php echo esc_url(get_the_author_meta('user_url', $author_id)); ?>" class="text-decoration-none text-primary">Website</a></li>
                        <?php if (get_the_author_meta('facebook')) : ?>
                            <li class="mx-2"><a href="<?php echo esc_url(get_the_author_meta('facebook')); ?>" target="_blank" class="text-decoration-none text-primary">Facebook</a></li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('twitter')) : ?>
                            <li class="mx-2"><a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>" target="_blank" class="text-decoration-none text-primary">Twitter</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- #content_wrapper -->
        <div class="col-sm-8" id="archive-content_wrapper">
            <div class="row bg-dark text-white p-4" id="aj-square-archive-content">
                <?php if (have_posts()) : ?>
                <div class="archive-header">
                    <?php
                    the_archive_title('<h2 class="archive-title">', '</h2>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </div>
                <!-- .archive-header -->
            </div>
            <div class="row py-3">
                <?php
                    while (have_posts()) : the_post(); ?>
                        <article class="col-sm-6 mb-5 rounded common-border" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-header">
                                <div class="featured_image">
                                    <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium_large', array('class' => 'img-fluid img-thumbnail latest-post-thumbnail'));
                                        }
                                    ?>
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                </h2>
                            </div>
                            <!-- .entry-header -->
                            <div class="entry-meta py-3">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <i class="bi bi-person"></i> <?php the_author_posts_link(); ?>
                                    </span>
                                    <span class="post-date">
                                        <i class="bi bi-calendar"></i> <?php the_time('d M, Y'); ?>
                                    </span>
                                    <span class="post-categories">
                                        <i class="bi bi-folder"></i> <?php the_category(', '); ?>
                                    </span>
                                    <span class="post-comments">
                                        <i class="bi bi-chat"></i> <?php comments_popup_link('No Comments', 'One Comment', '% Comments'); ?>
                                    </span>
                                </div>
                            </div>
                            <!-- .entry-meta -->
                            <div class="entry-summary pb-1">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                            <!-- .entry-summary -->
                        </article><!-- #post-<?php the_ID(); ?> -->

                    <?php endwhile; ?>

                    <div class="pagination">
                        <?php
                        the_posts_pagination(array(
                            'mid_size' => 2,
                            'prev_text' => __('&larr; Previous', 'aj-square'),
                            'next_text' => __('Next &rarr;', 'aj-square'),
                        ));
                        ?>
                    </div>

                <?php else : ?>

                    <article id="post-0" class="post no-results not-found">
                        <div class="entry-header">
                            <h2 class="entry-title"><?php _e('Nothing Found', 'aj-square'); ?></h2>
                        </div><!-- .entry-header -->

                        <div class="entry-content">
                            <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'aj-square'); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-0 -->

                <?php endif; ?>
            </div>
            <!-- #aj-square-content -->
        </div>
    </div><!-- .wrap -->
</section><!-- .main_wrap -->

<?php get_footer();?>