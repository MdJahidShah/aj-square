<?php
    /* Hero Section Widget Area */
    function register_hero_section_widget_area_fw() {
        register_sidebar(array(
            'name'          => __('Hero Section with Full Width', 'aj-square'),
            'id'            => 'hero-section-full-width',
            'before_widget' => '<div class="hero-section-full-width">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'register_hero_section_widget_area_fw');

    /* Hero Section Widget Area with Half width */
    function register_hero_section_widget_area() {
        register_sidebar(array(
            'name'          => __('Hero Section Widget Area', 'aj-square'),
            'id'            => 'hero-section-widget-area',
            'before_widget' => '<div class="col-sm-6 herosec-widget heroimg">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'register_hero_section_widget_area');

    // Custom Hero Secition widget area
    function ajsquare_register_addnew_hero_section() {
        register_sidebar(array(
            'name'          => __('Add New Section', 'aj-square'),
            'id'            => 'addnew-hero-section',
            'before_widget' => '<div class="row py-3 pb-3 addnew-hero-widget">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'ajsquare_register_addnew_hero_section');
?>