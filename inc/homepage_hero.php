<?php 
// Homepage heading customization
    function ajsquare_customize_register($wp_customize) {
        // Add a section for the homepage heading
        $wp_customize->add_section('homepage_settings', array(
            'title' => __('Homepage Hero Text Settings', 'aj-square'),
            'priority' => 30,
        ));

        // Add a setting for the homepage heading
        $wp_customize->add_setting('homepage_heading', array(
            'default' => __('Shaping Ideas into Reality', 'aj-square'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        // Add a setting for the homepage subheading
        $wp_customize->add_setting('homepage_subheading', array(
            'default' => __('We are a team of passionate developers and designers.', 'aj-square'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        // Add a setting for the homepage description
        $wp_customize->add_setting('homepage_description', array(
            'default' => __('We create beautiful and functional websites.', 'aj-square'),
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        // Add a control to edit the homepage heading
        $wp_customize->add_control('homepage_heading_control', array(
            'label' => __('Homepage Heading', 'aj-square'),
            'section' => 'homepage_settings',
            'settings' => 'homepage_heading',
            'type' => 'text',
        ));
        // Add a control to edit the homepage subheading
        $wp_customize->add_control('homepage_subheading_control', array(
            'label' => __('Homepage Subheading', 'aj-square'),
            'section' => 'homepage_settings',
            'settings' => 'homepage_subheading',
            'type' => 'text',
        ));
        // Add a control to edit the homepage description
        $wp_customize->add_control('homepage_description_control', array(
            'label' => __('Homepage Description', 'aj-square'),
            'section' => 'homepage_settings',
            'settings' => 'homepage_description',
            'type' => 'textarea',
        ));
        
    }
    add_action('customize_register', 'ajsquare_customize_register');
?>