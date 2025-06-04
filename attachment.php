<?php 
/*
The Template for displaying attachment pages
*/

get_header(); ?>
<main class="">
    <section class="container single-page py-3 ">
        <div class="row" id="aj-square-content">
            <div class="col-sm-12 px-1">
                <?php get_template_part('template-parts/post_setup')?>
                <?php var_export($post)?>
                
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center py-3" style="color:red;">Template Name: Attachment.php</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
