<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body <?php body_class(); ?>>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92833350-2', 'auto');
  ga('send', 'pageview');

</script>  
<script async src="https://www.youtube.com/iframe_api"></script>


<div id="container">
<div id="wrapper" class="site main-container <?php echo ( !is_page_template( 'template-home.php' )) ? 'container': ''; ?>">
    <nav id="sideNav">
    <?php wp_nav_menu( array(
                'menu'           => 'Main', // Do not fall back to first non-empty menu.
                'container' => false,
                'menu_class' => 'main-list-item',
                //'theme_location' => '__no_such_location'
                'fallback_cb'    => false // Do not fall back to wp_page_menu()
            ) ); ?>
    </nav>
	<header id="header" class="site-header" role="banner">
            <section class="navOpener left">
                <section class="hamburger">
                    <div class="line"></div>
                    <div class="line middle"></div>
                    <div class="line"></div> 
            </section>  
            </section>
            <figure class="logo left">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
                </a>
            </figure>
         <a id="shoppingcart" class="shoppingcart right" href="<?php echo get_permalink(10); ?>">
            <?php get_template_part('images/inline/shopping-cart.svg'); ?>   
        </a>  
	</header><!-- #header -->