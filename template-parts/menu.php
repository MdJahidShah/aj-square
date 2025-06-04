   <nav class="container navbar navbar-expand-lg navbar-dark w-100">
        <div class='container-fluid <?php echo esc_attr(get_theme_mod('ajs_menu_position')); ?>'>

            <!-- Logo -->
            <a class="navbar-brand custom-logo-widget" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if ( get_theme_mod('ajs_logo') ) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('ajs_logo')); ?>" alt="<?php bloginfo('name'); ?>">
                <?php elseif ( has_custom_logo() && get_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="site-title"><?php bloginfo('name'); ?></span>
                <?php endif; ?>
            </a>


            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <label class="css-toggle-wrapper">
                    <i class="bi bi-list"></i>
                </label>
            </button>

            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex flex-wrap flex-grow-1 align-items-center nav-color">
                    <!-- Menu -->
                    <?php
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'navbar-nav ms-auto',
                                'container' => false,
                                'depth' => 3,
                                'walker' => new WP_Bootstrap_Navwalker(),
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            ));
                        }
                    ?>

                    <!-- Search -->
                    <div class="nav-item nav-search">
                        <a class="nav-link" href="#" id="searchIcon">
                            <i class="bi bi-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Search Form (Hidden by Default) -->
    <div class="nav-item" id="searchForm" style="display: none;">
        <?php get_search_form(); ?>
    </div>