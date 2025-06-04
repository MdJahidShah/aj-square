<?php
    /**
     * Theme functions and definitions
     */
    // Elementor compatibility
    function ajsquare_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', array('post', 'page', 'service'));
        add_image_size('post-thumbnails', 1200, 630, true);

        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ));

        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');
        add_theme_support('responsive-embeds');

        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

        add_theme_support('editor-styles');
        add_editor_style('assets/css/style.css');

        // ✅ Corrected post formats support
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
    }
    add_action('after_setup_theme', 'ajsquare_setup');


    function ajsquare_register_block_styles() {
        // Example: Add custom styles to core/quote
        register_block_style( 'core/quote', array(
            'name'  => 'fancy-quote',
            'label' => __( 'Fancy Quote', 'aj-square' ),
            'inline_style' => '.is-style-fancy-quote { font-style: italic; border-left: 4px solid #333; padding-left: 10px; }',
        ) );
    }
    add_action('init', 'ajsquare_register_block_styles');

     // Content width
    if (!isset($content_width)) {
        $content_width = 1140;
    }

    // Reading time
    function get_reading_time($post_id) {
        $content = get_post_field('post_content', $post_id);
        $word_count = str_word_count(strip_tags($content));
        return ceil($word_count / 200);
    }

    // Time ago format
    function time_ago($post_id) {
        $post_time = get_post_time('U', true, $post_id);
        $time_difference = time() - $post_time;

        if ($time_difference < 1) return 'Just now';

        $time_units = array(
            31536000 => 'year',
            2592000  => 'month',
            604800   => 'week',
            86400    => 'day',
            3600     => 'hour',
            60       => 'minute',
            1        => 'second'
        );

        foreach ($time_units as $unit => $unit_name) {
            if ($time_difference >= $unit) {
                $num = floor($time_difference / $unit);
                return $num . ' ' . $unit_name . ($num > 1 ? 's' : '') . ' ago';
            }
        }
    }
?>
