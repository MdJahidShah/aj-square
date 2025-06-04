<?php
/**
 * The sidebar containing the main widget area
 *
 * @package aj-square
 */
?>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <aside id="secondary" class="sidebar widget-area ">
        <div class="sidebar-inner p-1">
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
        </div>
    </aside>
<?php else : ?>
    <aside id="secondary" class="sidebar widget-area ">
        <div class="sidebar-inner p-1">
            <p class="text-muted"><?php _e( 'Add some widgets from the admin area to see them here.', 'aj-square' ); ?></p>
        </div>
    </aside>
<?php endif; ?>
