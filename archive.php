<?php 
/*
    The Template for displaying archive pages.
*/

get_header(); ?>

<section class="container py-3 content-archive ">
    <div class="row py-3">
        <div class="col-sm-8" id="archive-content_wrapper">
            <div class="row bg-dark text-white p-3 mb-3 rounded mt-3" id="aj-square-archive-content">
                <div class="archive-header">
                    <?php
                    the_archive_title('<h1 class="archive-title text-white">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </div>
                <!-- .archive-header -->
            </div>
            <div class="row py-3">
                <div class="container">
                    <?php get_template_part('/template-parts/blog_setup')?>
                </div>
            </div>
            <!-- #aj-square-content -->
        </div>
        <div class="col-sm-4 sidebar">
            <?php get_sidebar(); ?>
        </div><!-- #content_wrapper -->
    </div><!-- .wrap -->
</section><!-- .main_wrap -->

<?php get_footer();?>
