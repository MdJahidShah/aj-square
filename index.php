<?php get_header(); ?>

<!--div class="container-fluid  text-dark p-5 py-5">
    <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-9 homepage-content">
            <h1>< ?php echo esc_html( get_theme_mod('homepage_heading', 'Shaping Ideas into Reality') ); ?></h1>
            <p>< ?php echo esc_html( get_theme_mod('homepage_subheading', 'We are a team of passionate developers') ); ?></p>
            <p>< ?php echo esc_html( get_theme_mod('homepage_description', 'We create beautiful and functional websites') ); ?></p>
            <a href="< ?php echo esc_url(get_theme_mod('homepage_button_link', '#latestposthead')); ?>" class="btn btn-primary text-white">Learn More</a>
        </div>
    </div>
</div-->

<main>
    <?php get_template_part('template-parts/content', get_post_format());?>
</main>

<?php get_footer(); ?>
