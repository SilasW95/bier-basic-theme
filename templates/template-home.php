<?php
/**
 * Template Name: Home Page
 *
 * Displays the Home page
 *
 */
?>

<?php get_header(); ?>

<main>
<section id="homeIntro" class="grid-split pagesection">
    <section>
        <div>
            <h1>Ontwerp je eigen deck</h1>
            <h4>Lasergegraveerde skateboards</h4>
        </div> 
    </section>
    <section>
        <footer class="grid-split buttons">
            <a href="#" class="btn-large">
                <span>Ontwerp</span>
                <?php get_template_part('images/inline/chrevronright.svg'); ?>
            </a>        
            <a href="#" class="btn-large white">
                <span>Shop</span>
                <?php get_template_part('images/inline/chrevronright.svg'); ?>
            </a>
        </footer>
    </section>
    <?php
        $thumb_url = get_the_post_thumbnail_url();
        
        if(has_post_thumbnail()){
            echo "<div class='homeBG' style='background-image:url($thumb_url)'></div>";
        }

        ?>
</section>

<ul id="steps" class="grid-container-4">
    <li>
        <h4>Stap 1</h4>
        <figure>
            <?php get_template_part('images/inline/step-1.svg'); ?>            
        </figure>
        <span>Kies een deck</span>
    </li>
    <li>
        <h4>Stap 2</h4>
        <figure>
            <?php get_template_part('images/inline/step-1.svg'); ?>            
        </figure>
        <span>Kies een deck</span>
    </li>
    <li>
        <h4>Stap 3</h4>
        <figure>
            <?php get_template_part('images/inline/step-1.svg'); ?>            
        </figure>
        <span>Kies een deck</span>
    </li>
    <li>
        <h4>Stap 4</h1>
        <figure>
            <?php get_template_part('images/inline/step-1.svg'); ?>            
        </figure>
        <span>Kies een deck</span>
    </li>
</ul>
<ul id="customizerChoice" class="grid-container-3">
    <li>
        <a href="#">
            <div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/longboard.jpg"></div>
            <!-- <figure>
                <?php get_template_part('images/inline/longboard.svg'); ?>
            </figure> -->
            <section class="btn" href="#">
                <span>Longboard</span>
                <?php get_template_part('images/inline/chrevronright.svg'); ?>
            </section>
        </a>
    </li>
    <li>
        <a href="#">
            <div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/skateboard.jpg"></div>
            <!-- <figure>
               <?php get_template_part('images/inline/traditional.svg'); ?>
            </figure> -->
            <section class="btn">
                <span>Traditioneel</span>
                <?php get_template_part('images/inline/chrevronright.svg'); ?>
            </section>
        </a>
    </li>
    <li>
        <a href="#">
            <div style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/cruiser.jpg"></div>
           <!-- <figure>
             <?php get_template_part('images/inline/cruiser.svg'); ?>
            </figure> -->
            <section class="btn" href="#">
                <span>Cruiser</span>
                <?php get_template_part('images/inline/chrevronright.svg'); ?>
            </section>
        </a>
    </li>
</ul>
</main>

<?php get_footer(); ?>