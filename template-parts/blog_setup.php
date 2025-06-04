    <?php
        if (have_posts()) :
            echo '<div class="row d-flex flex-wrap g-2" id="latestpostarea">';
            while (have_posts()) : the_post(); ?>
                <div class="latest-post-item col-sm-6 mb-3">
                    <div class="latest-content-item border rounded p-2">
                        <div class="post_thumb">
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                <div class="featured_image">
                                    <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => 'img-fluid post-thumbnails'));
                                        }
                                    ?>
                                </div>
                            </a>
                        </div>
                        <div class="pphead post_details">
                            <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                        
                        <div class="post-meta py-1">
                            <span class="post-author">
                                <i class="bi bi-person"></i> <?php the_author_posts_link(); ?> | <i class="bi bi-calendar"> <?php the_time('d M, Y'); ?></i> 
                            </span>
                        </div>
                        <div class="entry-content content-info">
                            <div class="post-excerpt">
                                <p>
                                    <?php echo wp_trim_words(get_the_excerpt(), 15),''; ?>
                                    <a class="readmore-arrow" href="<?php the_permalink(); ?>"> &raquo;</a>
                                </p>
                            </div>
                            <div class="divmiddle">
                                <div class="read-time">
                                    <?php
                                    $reading_time = get_reading_time(get_the_ID());
                                    $time_ago = time_ago(get_the_ID());
                                    ?>
                                    <span> • <?php echo $reading_time; ?> min read | <?php echo $time_ago; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            echo '</div>';
        else:
            echo '<p>No latest posts found.</p>';
        endif;
        wp_reset_postdata();
    ?>
    <div class="page-nav" id="page_navigation">
        <?php if ('ajs_pagenav') {ajs_pagenav(); } else{ ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
        <?php } ?>
    </div>