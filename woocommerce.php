<?php
/**
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bier
 */

get_header(); ?>

<section id="content" class="grid-side-left">
    <aside id="sidebar-primary" class="sidebar">
        <?php dynamic_sidebar( 'sidebarwoo' ); ?>
    </aside>

    <main id="posts" class="colfull auto grid-container-9" >
    <?php // woocommerce_breadcrumb() ?>      
        <?php woocommerce_content(); ?>
    </main><!-- posts -->
</section>

<?php 
//get_sidebar();
get_footer();

?>