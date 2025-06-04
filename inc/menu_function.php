<?php
// Menu registration
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aj-square'),
    ));
    /*/ Walker Menu Properties
   function ajs_nav_description( $item_output, $item, $depth, $args ) {
        if ( is_object($args) && ! empty( $item->description ) ) {
            $item_output = str_replace(
                $args->link_after . '</a>',
                '<span class="walker_nav">' . esc_html($item->description) . '</span>' . $args->link_after . '</a>',
                $item_output
            );
        }
        return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'ajs_nav_description', 10, 4 );*/
?>