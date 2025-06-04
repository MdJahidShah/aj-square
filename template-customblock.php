<?php
/*
Template Name: AJ Custom BlockPage
*/

get_header(); ?>

<?php if ( is_active_sidebar('hero-section-full-width') ) : ?>
    <div class="container py-3">
        <?php dynamic_sidebar('hero-section-full-width'); ?>
    </div>
<?php endif; ?>

<?php if ( is_active_sidebar('hero-section-widget-area') ) : ?>
    <div class="container-fluid herobg">
        <div class="row">
            <?php dynamic_sidebar('hero-section-widget-area'); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ( is_active_sidebar('addnew-hero-section') ) : ?>
    <div class="container py-3 addnewhero">
        <?php dynamic_sidebar('addnew-hero-section'); ?>
    </div>
<?php endif; ?>

<?php if ( is_active_sidebar('custom-block') ) : ?>
    <section class="container">
        <div class="row">
            <?php dynamic_sidebar('custom-block'); ?>
        </div>
    </section>
<?php endif; ?>

<?php if ( is_active_sidebar('faq-widget-area') ) : ?>
    <div class="container py-3">
        <div class="row custom-block-faq-widget">
            <?php dynamic_sidebar('faq-widget-area'); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>