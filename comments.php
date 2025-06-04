<?php
if ( post_password_required() ) {
    return;
}
?>
<div class="container">
    <div id="comments" class="comments-area container">

        <?php if ( have_comments() ) : ?>
            <h3 class="comments-title h4 mb-4 border-bottom pb-2">
                <?php echo get_comments_number() . ' Comment' . ( get_comments_number() !== 1 ? 's' : '' ); ?>
            </h3>

            <ol class="comment-list list-unstyled">
                <?php wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 60,
                    'walker'      => null,
                    'callback'    => null,
                ) ); ?>
            </ol>

            <nav class="comment-navigation my-4">
                <?php the_comments_navigation(); ?>
            </nav>
        <?php endif; ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="comment-form-wrapper mt-1">
                    <?php comment_form( array(
                        'class_form'           => 'comment-form needs-validation',
                        'title_reply_before'   => '<h4 class="reply-title h5 mb-4">',
                        'title_reply_after'    => '</h4>',
                        'class_submit'         => 'btn btn-primary mt-2',
                        'comment_field'        => '<div class="form-group"><label for="comment" class="form-label">Comment</label><textarea id="comment" name="comment" class="form-control" rows="4" required></textarea></div>',
                        'fields'               => apply_filters( 'comment_form_default_fields', array(
                            'author' =>
                                '<div class="form-group"><label for="author" class="form-label">Name</label>' .
                                '<input id="author" name="author" type="text" class="form-control" required></div>',

                            'email' =>
                                '<div class="form-group"><label for="email" class="form-label">Email</label>' .
                                '<input id="email" name="email" type="email" class="form-control" required></div>',

                            'url' =>
                                '<div class="form-group"><label for="url" class="form-label">Website</label>' .
                                '<input id="url" name="url" type="url" class="form-control"></div>'
                        )),
                    ) ); ?>
                </div>
            <?php endif; ?>

    </div>
</div>
<div class="container">
    <?php
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        the_comments_navigation(); // or the_comments_pagination();
    endif;
    ?>
</div>
