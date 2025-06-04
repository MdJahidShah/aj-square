<?php
    // Only include posts and pages in search results
    function restrict_search_to_posts_and_pages($query) {
        if ($query->is_search && !is_admin()) {
            $query->set('post_type', array('post', 'page'));
        }
        return $query;
    }
    add_filter('pre_get_posts', 'restrict_search_to_posts_and_pages');
?>