    <div class="row col-head py-3">
        <div class="col post-head-as">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="row pt-3" id="aj-squarecontent">
        <?php
            if(have_posts()): the_post(); ?>
        
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-wrap entry-content">
                    <div><?php the_content(); ?></div>
                </div>
                <div class="col-12 py-3">
                    <?php
                        // Add wp_link_pages for paginated posts
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'aj-square' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                    <div class="container">
                        <?php the_tags( '<div class="post-tags mt-3"><strong>Tags:</strong> ', ', ', '</div>' ); ?>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="container">
                        <!-- Add share buttons below content -->
                        <?php if (locate_template('social-share-buttons.php')) {
                                get_template_part('social-share-buttons');
                            } else {
                                echo '<p>Share buttons not available.</p>';
                            }
                        ?>
                    </div>
                </div>
                <!-- Author Information Section Start -->
                <div class="col-12 author-information py-5 mb-2 bg-light text-dark mt-1">
                    <div class="row">
                        <div class="col-sm-3 colauth">
                            <?php
                                $author_id = get_the_author_meta('ID');
                                $author_name = get_the_author();
                                $author_description = get_the_author_meta('description');
                                $author_avatar = get_avatar($author_id, 120, '', '', array('class' => 'rounded-circle shadow-sm mb-3'));
                            ?>
                            
                            <div class="col author-avatar mb-3">
                                <?php echo $author_avatar; ?>
                            </div>
                        </div>
                        <div class="col-sm-9 colauthin">
                            <div class="col-12 author-description">
                                <h3>Author:<b> <?php the_author(); ?></b></h3>
                                <p><?php $author_description = get_the_author_meta('description');
                                    $words = explode(' ', $author_description);
                                    $short_description = implode(' ', array_slice($words, 0, 25));

                                    echo $short_description . (count($words) > 25 ? '...' : '');
                                    ?>
                                </p>
                            </div>
                            <div class="col-12 author-social-media row">
                                <div class="col-sm-4">
                                    <p class="mt-3"><b>Follow Author:</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <?php if ( get_the_author_meta('facebook') ) : ?>
                                        <a href="<?php echo esc_url( get_the_author_meta('facebook') ); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if ( get_the_author_meta('twitter') ) : ?>
                                        <a href="<?php echo esc_url( get_the_author_meta('twitter') ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ( get_the_author_meta('linkedin') ) : ?>
                                        <a href="<?php echo esc_url( get_the_author_meta('linkedin') ); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <?php endif; ?>
                                    <?php if ( get_the_author_meta('instagram') ) : ?>
                                        <a href="<?php echo esc_url( get_the_author_meta('instagram') ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-primary text-white" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">Read About Author</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Author Information Section End -->
                
                <!-- Comment Section Start -->
                <div class="col-12 px-3 bg-light" id="post_comments">
                    <?php if (comments_open() ):?>
                    <?php comments_template();?>
                    <?php endif; ?>
                </div>
                <!-- Comment Section End -->
            </article>
    
        <?php        
                else:
                echo 'No Post Found';
            endif;
        ?>
    </div>