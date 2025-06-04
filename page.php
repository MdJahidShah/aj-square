<?php get_header(); ?>
<main>
    <section class="container py-3 ">
        <div class="row">
            <div class="col-sm-8">
                <?php get_template_part('template-parts/post_setup_page');?>
            </div>
            <div class="col-sm-4 sidebar">
                <?php get_sidebar(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
