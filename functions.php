<?php
    /**
    * Theme functions and definitions
    */ 
    function ajsquare_theme_textdomain() {
        load_theme_textdomain('aj-square', get_template_directory() . '/languages');
    }
    add_action('after_setup_theme', 'ajsquare_theme_textdomain');

        // All Default Theme Function 
        include_once ('inc/default.php');
        // Theme Function
        include_once ('inc/theme_function.php');
        // Enqueue Function
        include_once ('inc/enqueue.php');
        // Login Enqueue Function
        include_once ('inc/login_enqueue.php');
        // Menu registration
        include_once ('inc/menu_function.php');
        // Excerpt Function
        include_once ('inc/excerpt_function.php');
        // Custom Post Function 
        include_once ('inc/custom_post_function.php');
        // Documentation Function
        include_once ('inc/documentation_function.php');
        //restrict_search_function
        include_once ('inc/restrict_search_function.php');
        // Pagination Function
        include_once ('inc/pagination_function.php');
        // Widgets Register
        include_once ('inc/widgets_register.php');
        // Hero Section Function
        include_once ('inc/herosection_widget.php');
        // Homepage Hero Section
        include_once ('inc/homepage_hero.php');
        // FAQ Widget
        include_once ('inc/faq_widget.php');
        // Shortcode Function
        include_once ('inc/shortcode_function.php');
        // Customizer Theme Option 
        include_once ('inc/theme_option/admin_theme_option.php');

        // Elementor compatibility
        function ajsquare_elementor_support() {
            add_theme_support('elementor');
        }
        add_action('after_setup_theme', 'ajsquare_elementor_support');

        // Add custom block patterns
        function ajsquare_register_block_patterns() {
            $dir = get_template_directory() . '/patterns';

            if ( ! file_exists( $dir ) ) {
                return;
            }

            foreach ( glob( $dir . '/*.php' ) as $file ) {
                require_once $file;
            }
        }
        add_action( 'init', 'ajsquare_register_block_patterns' );


        // Start session properly in WordPress
        function mars_quiz_session_start() {
            if (!session_id()) {
                session_start();
            }
        }
        add_action('init', 'mars_quiz_session_start');