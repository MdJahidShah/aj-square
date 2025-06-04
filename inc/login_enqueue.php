<?php
    // Enqueue scripts and styles
    function ajslogin_scripts() {
        // Login stylesheet
        wp_enqueue_style('aj-login-style', get_template_directory_uri() . '/assets/css/login-style.css', array(), '1.0.0');

    }
    add_action('login_enqueue_scripts', 'ajslogin_scripts');

    // Changing Login Logo URL
    function ajslogin_logo_url() {
        // Change the login logo URL to the home page
        ?>
            <style>
                #login h1 a, .login h1 a {
                    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/login-logo.png');
                    width: 80px;
                    height: 80px;
                    background-size: contain;
                    background-repeat: no-repeat;
                    border-radius: 50%;
                }
            </style>
        <?php
        return home_url();
    }
    add_filter('login_headerurl', 'ajslogin_logo_url');
    // Changing Login 