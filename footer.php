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
    
<section class="cta pagesection colfull">
    <h2>Ontdek bestaande ontwerpen</h2>
    <section class="big-btn">
        <a class="btn" href="#">
            <span>Bekijk de shop</span>
             <svg width=15 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 24.32"><defs></defs><title>Asset 9</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="chevron-right" points="0 2.84 2.84 0 15 12.16 2.84 24.32 0 21.49 9.32 12.16 0 2.84"/></g></g></svg>
        </a>
    </section>
</section>

<section class="usp">
    <ul>
        <li>
            <svg width=75 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 75"><defs></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,0,75,37.5,37.5,37.5,0,0,0,37.5,0Zm-.11,48.79h0L31.22,55h0l-6.17-6.16h0L14,37.69l6.17-6.17,11.1,11.1L54.65,19.19l6.17,6.16Z"/></g></g></svg>
            <section>Gratis verzending</section>
        </li>
        <li>
            <svg width=75 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 75"><defs></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,0,75,37.5,37.5,37.5,0,0,0,37.5,0Zm-.11,48.79h0L31.22,55h0l-6.17-6.16h0L14,37.69l6.17-6.17,11.1,11.1L54.65,19.19l6.17,6.16Z"/></g></g></svg>
            <section>Binnen 3 tot 5 weken</section>
        </li>
        <li>
            <svg width=75 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 75"><defs></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,0,75,37.5,37.5,37.5,0,0,0,37.5,0Zm-.11,48.79h0L31.22,55h0l-6.17-6.16h0L14,37.69l6.17-6.17,11.1,11.1L54.65,19.19l6.17,6.16Z"/></g></g></svg>
            <section>Veilig en makkelijk betalen</section>
        </li>
    </ul>
</section>
<section class="video">
    <section id="homeVideo">
        
    </section>
</section>
<section class="paddingbottom colfull auto">
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
        <div class="swiper-pagination"></div>
    </section>
    <section class="colfull auto">
        <section class="newsletter">
            <h3>Blijf op de hoogte</h3>
            <form action="#">
                <input type="text" name="newsletter-email" placeholder="e-mailadres"><input type="submit" class="btn" value="Zend">
            </form>
        </section>
        <?php wp_nav_menu( array(
            'menu'           => 'Footer', // Do not fall back to first non-empty menu.
            //'theme_location' => '__no_such_location'
            'fallback_cb'    => false // Do not fall back to wp_page_menu()
        ) ); ?>
        <section class="copyright">
            <p>Copyright <?php echo date('Y'); ?> Silas Willemsen</p>
        </section>  
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
      autoplay: 0,        // Auto-play the video on load
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
