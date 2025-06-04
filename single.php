<?php
/*
The Template for displaying single posts
*/
get_header(); ?>
<main class="">
    <section class="container single-page py-3 ">
        <div class="row" id="aj-square-content">
            <div class="col-sm-8 px-1">
                <?php get_template_part('template-parts/post_setup', get_post_format() );?>
            </div>
            <div class="col-sm-4 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
