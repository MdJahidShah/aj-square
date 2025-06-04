<?php
// Sidebar Widgets Register
    function ajsquare_widgets_init() {
        register_sidebar(array(
            'name'          => __('Right Sidebar', 'aj-square'),
            'id'            => 'main-sidebar',
            'description'   => __('Widgets added here will appear in the main sidebar.', 'aj-square'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-4 pb-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title mb-3">',
            'after_title'   => '</h3>',
        ));
        register_sidebar(array(
            'name'          => __('Footer Widgets', 'aj-square'),
            'id'            => 'footer-1',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'aj-square'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
    add_action('widgets_init', 'ajsquare_widgets_init');

    // Custom Block widget area
    function ajsquare_register_custom_block() {
        register_sidebar(array(
            'name'          => __('Custom Block', 'aj-square'),
            'id'            => 'custom-block',
            'before_widget' => '<div class="col-sm-12 pt-3 pb-3 customblock-widget">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'ajsquare_register_custom_block');

    // Register Footer UP custom Section type
    function register_footerup_widget_area() {
        register_sidebar(array(
            'name'          => __('FooterUp Widget Area', 'aj-square'),
            'id'            => 'footerup-widget-area',
            'before_widget' => '<div class="col-sm-3 footerup-widget">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'register_footerup_widget_area');

?>