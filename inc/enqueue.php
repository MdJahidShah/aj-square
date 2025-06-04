<?php
    // Enqueue scripts and styles
    function ajsquare_scripts() {
        // Theme main stylesheet
        wp_enqueue_style('aj-square-root-style', get_stylesheet_uri(), array(), '1.0.0');

        // Theme custom style
        wp_enqueue_style('aj-square-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

        // Bootstrap (local)
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.6.2');

        // Font Awesome (local)
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.4.2');

        // Bootstrap Icons (local)
        wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/bootstrap-icons/bootstrap-icons.css', array(), '1.10.5');
        
        // jQuery (use default from WordPress)
        wp_enqueue_script('jquery');

        // Bootstrap JS (local)
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.6.2', true);

        // Math JS (local)
        wp_enqueue_script('math-js', get_template_directory_uri() . '/assets/mscf/math.js', array('jquery'), '11.11.0', true);

        // Custom JS (local)
        wp_enqueue_script('square-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.1.0', true);        
    }
    add_action('wp_enqueue_scripts', 'ajsquare_scripts');

    // Enqueue admin styles
    function aj_enqueue_admin_styles() {
        wp_enqueue_style('aj-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), '1.0.0');

        // Enqueue comment reply if needed
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
        
    }
    add_action('admin_enqueue_scripts', 'aj_enqueue_admin_styles');

    // Google Fonts
    function ajsquare_google_fonts() {
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', false);
        wp_enqueue_style('google-fonts-2', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', false);
    }
    add_action('wp_enqueue_scripts', 'ajsquare_google_fonts');

    // Dashicon Load Issue
    function ajs_dashicon_load() {
        wp_enqueue_style('dashicons');
    }
    add_action('wp_enqueue_scripts', 'ajs_dashicon_load');

    // Bootstrap Enqueue for Admin Style
    function ajs_enqueue_admin_styles() {
        $theme_dir = get_template_directory_uri(); // or get_stylesheet_directory_uri() for child themes

        wp_enqueue_style('ajs-admin-style', $theme_dir . '/assets/css/admin-style.css', array(), '1.0.0');
        // Bootstrap CSS
        wp_enqueue_style('admin-bootstrap-css', $theme_dir . '/assets/css/bootstrap.min.css', array(),'4.6.2');

        // Bootstrap JS
        wp_enqueue_script(
            'admin-bootstrap-js',
            $theme_dir . '/assets/js/bootstrap.bundle.min.js',
            array('jquery'),
            '4.6.2',
            true
        );
    }
    add_action('admin_enqueue_scripts', 'ajs_enqueue_admin_styles');
