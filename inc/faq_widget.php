<?php
// Register FAQ widget area
    function ajsquare_register_faq_widget_area() {
        register_sidebar(array(
            'name'          => __('FAQ Widget Area', 'aj-square'),
            'id'            => 'faq-widget-area',
            'before_widget' => '<div class="faq-widget">',
            'after_widget'  => '</div>',
        ));
    }
    add_action('widgets_init', 'ajsquare_register_faq_widget_area');
?>