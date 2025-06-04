<?php
// Theme Option
	function ajs_theme_option(){
		// Main Menu Page (acts as parent and points to "General" by default)
		add_menu_page(
			'Theme Option for Admin',                      // Page title (shown on the page)
			'Theme Option',                                // Menu title (shown in sidebar)
			'manage_options',                              // Capability required to view
			'ajs_theme_option',                            // Menu slug (same as "General" to open it by default)
			'ajs_theme_create_page',                       // Callback function (same as "General")
			get_template_directory_uri() . '/assets/images/aj-icon.png', // Icon URL
			101                                            // Position in the menu
		);

		// General Submenu Page (this is the default one that also appears under "Theme Option")
		add_submenu_page(
			'ajs_theme_option',                            // Parent slug (main menu slug)
			'General',                                     // Page title
			'General',                                     // Menu title
			'manage_options',                              // Capability
			'ajs_theme_option',                            // Menu slug (same as parent to open this by default)
			'ajs_theme_create_page'                        // Callback function
		);

		// Custom CSS Submenu Page
		add_submenu_page(
			'ajs_theme_option',                            // Parent slug
			'Custom CSS',                                  // Page title
			'Custom CSS',                                  // Menu title
			'manage_options',                              // Capability
			'ajs_custom_css',                              // Menu slug
			'ajs_custom_css'                               // Callback function
		);

		// Custom js Submenu Page
		add_submenu_page(
			'ajs_theme_option',                           	// Parent slug
			'Custom JS',                                 	// Page title
			'Custom JS',                                  	// Menu title
			'manage_options',                             	// Capability
			'ajs_custom_js',                              	// Menu slug
			'ajs_custom_js_page'                          	// Callback function
		);

		// Custom js Submenu Page
		add_submenu_page(
			'ajs_theme_option',                           	// Parent slug
			'Documentation',                                 	// Page title
			'Documentation',                                  	// Menu title
			'manage_options',                             	// Capability
			'ajs_documentation',                              	// Menu slug
			'ajs_custom_documentation_page'                          	// Callback function
		);
	}
	add_action('admin_menu', 'ajs_theme_option');

	// Callback for General page
	function ajs_theme_create_page() {
		require_once(get_template_directory().'/inc/theme_option/general.php');
	}

	// Callback for Custom CSS page
	function ajs_custom_css() {
		require_once(get_template_directory().'/inc/theme_option/custom_css.php');
	}

	// Callback for Custom CSS page
	function ajs_custom_js_page() {
		require_once(get_template_directory().'/inc/theme_option/custom_js.php');
	}

	// Callback for Documentation page
	function ajs_custom_documentation_page() {
		require_once(get_template_directory().'/inc/theme_option/documentation.php');
	}
