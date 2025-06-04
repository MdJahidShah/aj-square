<?php
// Set custom excerpt length
function ajs_custom_excerpt_length($length) {
    return 25; // Set to desired word count
}
add_filter('excerpt_length', 'ajs_custom_excerpt_length');

// Customize the "Read More" link
function ajs_excerpt($more){
    return '<br><br><a class="readmore btn btn-primary text-white" href="' . get_the_permalink() . '">Read More</a>';
}
add_filter('excerpt_more', 'ajs_excerpt');

?>