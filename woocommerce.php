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


<main id="posts">
    <div class="colfull auto">
          
        <?php woocommerce_content(); ?>
        <div class="clr"></div>
    </div><!-- colfull -->
    </main><!-- posts -->


<?php 
//get_sidebar();
get_footer();

?>