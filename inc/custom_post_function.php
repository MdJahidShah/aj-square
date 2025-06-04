<?php
/*
 Custom Post Type for Services 
*/
    add_action('init', 'custom_service');
   function custom_service() {
        register_post_type('service',
            array(
                'labels' => array(
                    'name' => __('Services', 'aj-square'),
                    'singular_name' => __('Service', 'aj-square'),
                    'add_new' => __('Add New Service', 'aj-square'),
                    'add_new_item' => __('Add New Service', 'aj-square'),
                    'edit_item' => __('Edit Service', 'aj-square'),
                    'new_item' => __('New Service', 'aj-square'),
                    'view_item' => __('View Service', 'aj-square'),
                    'search_items' => __('Search Services', 'aj-square'),
                    'not_found' => __('No services found', 'aj-square'),
                ),
                'menu_icon' => 'dashicons-networking',
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'menu_position' => 5,
                'has_archive' => true,
                'hierarchical' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'taxonomies' => array('category'),
                'rewrite' => array('slug' => 'services'),
                'supports' => array('title', 'editor', 'thumbnail'),
            )
        );
        add_theme_support('post-thumbnails');
    }
    

    function query_post_type($query) {
        if ($query->is_category() && $query->is_main_query()) {
            $query->set('post_type', array('post', 'service'));
        }
        if ($query->is_post_type_archive('service') && $query->is_main_query()) {
            $query->set('post_type', 'service');
            return $query;
        }
    }
    add_filter('pre_get_posts', 'query_post_type');