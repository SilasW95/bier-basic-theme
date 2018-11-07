<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<footer id="footer">
    <?php 
    if(is_front_page()): ?>
        <section class="cta block colfull grid-container-12">
            <h2>Ontdek bestaande ontwerpen</h2>
            <a class="btn-large" href="#">
                <span>Bekijk de shop</span>        
                <?php get_template_part('images/inline/chrevronright.svg'); ?>            
            </a>
        </section>
        <ul class="usp grid-container-3">
            <li>
                <?php get_template_part('images/inline/usp.svg'); ?>            
                <section>Gratis verzending</section>
            </li>
            <li>
                <?php get_template_part('images/inline/usp.svg'); ?> 
                <section>Binnen 3 tot 5 weken</section>
            </li>
            <li>
                <?php get_template_part('images/inline/usp.svg'); ?> 
                <section>Veilig en makkelijk betalen</section>
            </li>
        </ul>
    <section class="video">
        <section id="homeVideo"></section>
    </section>
    <?php      
    endif;
    ?>
    
<section class="paddingbottom block colfull auto">
    <h3>Dit maken anderen</h3>
</section>
    <section id="socialslider" class="socialslider swiper-container">
        <ul class="swiper-wrapper">
            <li class="skills swiper-slide">
                <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-1.jpg)"></a>
            </li>
            <li class="skills swiper-slide">
            <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-2.jpg)"></a>
            </li>
            <li class="skills swiper-slide">
            <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-3.jpg)"></a>
            </li>
            <li class="skills swiper-slide">
            <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-4.jpg)"></a>
            </li>
            <li class="skills swiper-slide">
            <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-3.jpg)"></a>
            </li>
            <li class="skills swiper-slide">
            <a href="#" style="background-image:url(<?php echo get_template_directory_uri();?>/images/slider-1.jpg)"></a>
            </li>   
        </ul>
    </section>
    <section class="block colfull auto">
        <section class="newsletter">
            <h3>Blijf op de hoogte</h3>
            <form action="#">
                <input type="text" name="newsletter-email" placeholder="e-mailadres"><input type="submit" class="btn" value="Zend">
            </form>
        </section>
        <?php wp_nav_menu( array(
            'menu'           => 'Footer', // Do not fall back to first non-empty menu.
            'container' => false,
            'menu_class' => 'footer-list grid-container-4 paddingbottom',
            //'theme_location' => '__no_such_location'
            'fallback_cb'    => false // Do not fall back to wp_page_menu()
        ) ); ?>
       
    </section>

    <section class="colfull no-Ypadding">
        <p>Copyright <?php echo date('Y'); ?> Silas Willemsen</p>
    </section>    
</footer>
<?php wp_footer(); ?>

<script async src="https://www.youtube.com/iframe_api"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('homeVideo', {
    videoId: 's1GPA55Woq8', // YouTube Video ID
    //width: 1920,               // Player width (in px)
    height: 405,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 1,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 1,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 0,              // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 1         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
 }

// <script type="text/javascript">
// 	jQuery("[data-fancybox]").fancybox({
// 	}); // </script>

<script>
     if(typeof(Swiper) != "undefined" && Swiper !== null) {
         if(jQuery(window).width() >= 1100){ 
             var mySwiper = new Swiper('.swiper-container', {
                 speed: 400,
                 spaceBetween: 0,
                 slidesPerView: 4,
                 pagination: '.swiper-pagination',
                 paginationClickable: true
             });   
         }

         else{
             var mySwiper = new Swiper('.swiper-container', {
                 speed: 400,
                spaceBetween: 0,
                slidesPerView: 4,
                pagination: '.swiper-pagination',
                paginationClickable: true
            });   
        }
        mySwiper;
    }
</script>

</body>
</html>
