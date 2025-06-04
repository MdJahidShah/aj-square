<?php
/*
The Template for displaying 404 pages (Not Found).
*/

get_header(); ?>
<main>
    <section class="container py-3 ">
        <div class="row">
            <div class="col-sm-8">
                <div class="row col-head px-3 py-3">
                    <div class="post-head-as">
                        <h1>Page Not Found</h1>
                        <p>The page you are looking for does not exist. Visit <a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
