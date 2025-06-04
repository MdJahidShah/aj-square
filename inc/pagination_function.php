<?php
// Custom pagination
function ajs_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;

    if(!$current = get_query_var('paged')) $current = 1;

    $args = array(
        'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
        'total' => $max,
        'current' => $current,
        'prev_text' => '« Prev',
        'next_text' => 'Next »',
    );

    if ($max > 1) {
        echo '<div class="wp_pagenav">';
        echo '<p class="col-12 pages">Page ' . $current . ' <span>of</span> ' . $max . '</p>';
        echo paginate_links($args);
        echo '</div>';
    }
}

?>