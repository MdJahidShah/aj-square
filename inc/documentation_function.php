<?php
/*---------------------------------------------------
                Documentation Function
    ----------------------------------------------------*/
    function ajsquare_add_documentation_menu() {
        add_menu_page(
            __('AJ SQUARE', 'aj-square'), // Page title
            __('AJ SQUARE', 'aj-square'), // Menu title
            'manage_options', // Capability required to access the page
            'aj-square-docs', // Menu slug
            'ajsquare_theme_docs', // Callback function to render the page content
            'dashicons-book', // Icon for the menu
            60 // Position (use a lower value for above Appearance or higher for below)
        );
    }
    add_action('admin_menu', 'ajsquare_add_documentation_menu');
    // Render the Documentation Page Content
    function ajsquare_theme_docs() {
        ?>
        <div class="ajsquareth-wrap">
            <div class="ajsquareth-row">
                <div class="ajsquareth-paragraph ajsquareth_common">
                    <span class="fs-1"><?php _e('AJ Square Theme Documentation', 'aj-square'); ?></span>
                    <br><br>
                    <p><?php _e('Welcome to the AJ Square theme documentation. Here you will find all the information you need to set up and customize your theme.', 'aj-square'); ?></p>
                    <br>
                    <span class="fs-2"><?php _e('Installation Process', 'aj-square'); ?></span>
                    <br>
                    <ol>
                        <li><?php _e('Log in to your WordPress dashboard.', 'aj-square'); ?></li>
                        <li><?php _e('Navigate to "Appearance > Themes".', 'aj-square'); ?></li>
                        <li><?php _e('Click "Add New" and upload the theme file.', 'aj-square'); ?></li>
                        <li><?php _e('Activate the theme.', 'aj-square'); ?></li>
                    </ol>
                    <br>
                    <span class="fs-2"><?php _e('Customization Options', 'aj-square'); ?></span>
                    <br>
                    <p><?php _e('You can customize your theme using the WordPress Customizer. Navigate to "Appearance > Customize" and adjust the settings as per your preferences.', 'aj-square'); ?></p>
                    <ul>
                        <li><?php _e('Change background color.', 'aj-square'); ?></li>
                        <li><?php _e('Adjust typography and text color.', 'aj-square'); ?></li>
                        <li><?php _e('Modify layout options.', 'aj-square'); ?></li>
                    </ul>
                    <br>
                    <span class="fs-2"><?php _e('Troubleshooting Common Issues', 'aj-square'); ?></span>
                    <br>
                    <p><?php _e('If you encounter any problems, please check the following:', 'aj-square'); ?></p>
                    <ul>
                        <li><?php _e('Ensure the theme is activated.', 'aj-square'); ?></li>
                        <li><?php _e('Verify that all plugins are updated.', 'aj-square'); ?></li>
                        <li><?php _e('Check your browser console for errors.', 'aj-square'); ?></li>
                    </ul>
                    <br>
                    <span class="fs-2"><?php _e('Frequently Asked Questions (FAQ)', 'aj-square'); ?></span>
                    <br>
                    <p><strong><?php _e('How do I install the theme?', 'aj-square'); ?></strong><br>
                    <?php _e('Follow the steps in the installation process section above.', 'aj-square'); ?></p>
                
                </div>
                <div class="col-ajsquareth_sidebar_area ajsquareth_common">
                    <span class="fs-1" id="title"><span class="dashicons dashicons-businessperson"></span> About Author</span>
                    <br>
                    <p><img class="auth-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/author.png' ); ?>" alt="Jahid Shah"></p>
                    <p>I'm <strong>Jahid Shah</strong>, a front-end developer with specialized skills in WordPress theme development and WordPress Security Expert, who passionate about creating error-free, secure websites and achieving 100% client satisfaction. I have a drive for learning and sharing knowledge as widely as possible. Solving real-world problems is my passion.</p>
                    <br>
                    <span class="fs-3" id="title">Watch Help Video</span>
                    <br>
                    <p><a href="" target="_blank" class="btn">Watch On YouTube</a></p>
                </div>
            </div>
        </div>
        <?php
    }
?>