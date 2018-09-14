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


    <meta name="viewport" content="width=device-width">
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
    <section id="sideNav">
            <ul> 
                <li>
                    <a href="#">Menu item</a>   
                </li>
                <li>
                    <a href="#">Menu item</a>    
                </li>
                <li>
                    <a href="#">Menu item</a>      
                </li>
                <li>
                    <a href="#">Menu item</a>  
                </li>
                <li>
                    <a href="#">Menu item</a>  
                </li>
                <li>
                    <a href="#">Menu item</a>  
                </li>
                <li>
                    <a href="#">Menu item</a>  
                </li>
                <?php /*
                if ( 'templates/template-home.php' != get_post_meta($post->ID, '_wp_page_template', true )){ ?>
                    <li>
                        <a href="<?php echo get_permalink(2); ?>#work">Work</a>   
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(2); ?>#aboutme">About</a>   
                    </li>
                    <li>
                        <a href="<?php  echo get_permalink(2); ?>#contact">Contact</a>   
                    </li>
                <?php   
                } 
                else{
                ?>
                    <li>
                        <a class="nav scroll" href="#work">Work</a>
                        <ul class="menu-cat">
                            <?php
                            $args = array(
                                'orderby' => 'name',
                                'order' => 'DESC'
                            );
                            $categories = get_categories($args);
                            foreach($categories as $category) { 
                                echo '<li><a href="#work" id="' .  $category->slug . '" class="nav scroll categorie" title="' . 'View ' . $category->name  . '" ' . '>' . $category->name.'</a></li>';
                            }  
                            ?>         
                        </ul>
                    </li>
                    <li>
                        <a class="nav scroll" href="#aboutme">About</a>   
                    </li> 
                    <li>
                        <a class="nav scroll" href="#contact">Contact</a>   
                    </li>   
                <?php 
                } */ ?> 
            </ul>    
    </section>
    <div id="overlay"></div>
	<header id="header" class="site-header" role="banner">
            <section class="navOpener left">
                <div class="line"></div>
                <div class="line middle"></div>
                <div class="line"></div>    
            </section>
            <figure class="logo left">
                <a href="<?php bloginfo('url'); ?>">
                    <svg width=120 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370.88 199.7"><defs></defs><title>logo3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-2" d="M63.32,178.6l0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm0,0,0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm0,0,0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm38.21-3.55-.08,0,0,0,.22,0Zm36.61-58.8a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm0,0a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm-36.61,58.8-.08,0,0,0,.22,0ZM63.32,178.6l0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm0,0,0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm38.21-3.55-.08,0,0,0,.22,0Zm36.61-58.8a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm11.23,62.06a.27.27,0,0,1,0,.09v0h0A.51.51,0,0,0,149.37,178.31Zm34-2.61c0,.06,0,.1,0,0A0,0,0,0,0,183.39,175.7Zm28-71.54a30.94,30.94,0,0,0-8.35,2.93,58.09,58.09,0,0,0-14,10.78,86.45,86.45,0,0,0-6,6.61c-1.92,2.31-3.82,4.66-5.65,7.07q-5.51,7.22-10.59,14.76c-3.4,5-6.65,10.11-9.68,15.26-1.51,2.58-2.93,5.19-4.24,7.78-.41.81-.8,1.63-1.18,2.44l1-.7,3.57-2.52,3.47-2.73c2.35-1.76,4.53-3.81,6.78-5.73s4.4-4,6.58-6.08,4.28-4.2,6.36-6.39q6.3-6.46,12.27-13.32c8-9.09,15.66-18.56,23.13-28.2.6-.76,1.17-1.53,1.76-2.3A21.79,21.79,0,0,0,211.35,104.16Zm59.56,3.21c0,.06,0,.15,0,.29a.2.2,0,0,0,.11,0C271,107.49,270.91,107.23,270.91,107.37Zm.27.16a.28.28,0,0,1-.05.08s0,0,.05,0a.14.14,0,0,0,0,0Zm3.24,11.67a28.78,28.78,0,0,0-3.27,1,35.36,35.36,0,0,0-11.9,7.82,19.12,19.12,0,0,0-4.11,5.77,7.24,7.24,0,0,0-.67,3.35,4.55,4.55,0,0,0,1.56,3.1c-1.12-.58-2.08-.64-2.44-1.93a8.55,8.55,0,0,1-.1-4,26,26,0,0,1,1.23-4.05c-1.21,1.52-2.41,3.08-3.82,4.86-3.08,3.9-6.08,7.87-9.09,11.84l-2.22,3c-.66.92-1.31,1.85-1.93,2.81a54.62,54.62,0,0,0-3.32,6,48.55,48.55,0,0,0-4.23,12.63c-.1.63-.18,1.24-.23,1.83a40.85,40.85,0,0,0,3.36-2.52c.9-.7,1.77-1.52,2.66-2.29s1.75-1.61,2.61-2.47c3.49-3.35,6.84-7,10.18-10.65s5.63-6.49,8.88-10.2,6.23-7.56,9.09-11.5c1.42-2,2.81-4,4.09-6a51.83,51.83,0,0,0,3.37-6,13.88,13.88,0,0,0,.95-2.58Zm1.46-.19a.25.25,0,0,0,.13,0h.12a0,0,0,0,0,0,0Zm0,0a.25.25,0,0,0,.13,0h.12a0,0,0,0,0,0,0Zm-4.73,1.24a35.36,35.36,0,0,0-11.9,7.82,19.12,19.12,0,0,0-4.11,5.77,7.24,7.24,0,0,0-.67,3.35,4.55,4.55,0,0,0,1.56,3.1c-1.12-.58-2.08-.64-2.44-1.93a8.55,8.55,0,0,1-.1-4,26,26,0,0,1,1.23-4.05c-1.21,1.52-2.41,3.08-3.82,4.86-3.08,3.9-6.08,7.87-9.09,11.84l-2.22,3c-.66.92-1.31,1.85-1.93,2.81a54.62,54.62,0,0,0-3.32,6,48.55,48.55,0,0,0-4.23,12.63c-.1.63-.18,1.24-.23,1.83a40.85,40.85,0,0,0,3.36-2.52c.9-.7,1.77-1.52,2.66-2.29s1.75-1.61,2.61-2.47c3.49-3.35,6.84-7,10.18-10.65s5.63-6.49,8.88-10.2,6.23-7.56,9.09-11.5c1.42-2,2.81-4,4.09-6a51.83,51.83,0,0,0,3.37-6,13.88,13.88,0,0,0,.95-2.58l-.65.13A28.78,28.78,0,0,0,271.15,120.25Zm.05-12.73h0a.28.28,0,0,1-.05.08s0,0,.05,0A.14.14,0,0,0,271.2,107.52Zm-.29-.15c0,.06,0,.15,0,.29a.2.2,0,0,0,.11,0C271,107.49,270.91,107.23,270.91,107.37Zm-59.56-3.21a30.94,30.94,0,0,0-8.35,2.93,58.09,58.09,0,0,0-14,10.78,86.45,86.45,0,0,0-6,6.61c-1.92,2.31-3.82,4.66-5.65,7.07q-5.51,7.22-10.59,14.76c-3.4,5-6.65,10.11-9.68,15.26-1.51,2.58-2.93,5.19-4.24,7.78-.41.81-.8,1.63-1.18,2.44l1-.7,3.57-2.52,3.47-2.73c2.35-1.76,4.53-3.81,6.78-5.73s4.4-4,6.58-6.08,4.28-4.2,6.36-6.39q6.3-6.46,12.27-13.32c8-9.09,15.66-18.56,23.13-28.2.6-.76,1.17-1.53,1.76-2.3A21.79,21.79,0,0,0,211.35,104.16ZM183.4,175.67a0,0,0,0,0,0,0C183.39,175.76,183.4,175.8,183.4,175.67Zm-34,2.73v0h0a.51.51,0,0,0,0-.1A.27.27,0,0,1,149.37,178.4Zm-11.23-62.15a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm-36.69,58.82,0,0,.22,0h-.16ZM63.32,178.6l0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm294.89-75.94-.89,0a18.66,18.66,0,0,0-2.08.12c-4.52.08-12.07,3-29.19,17.25a15.63,15.63,0,0,0,.23-1.93c.41-8-4-14.7-12.49-15.2l-.68,0c-2.81,0-6.91,0-10.6,4.72-3.11,3.63-6,7.08-8.65,10.3,0-.2,0-.4,0-.59a6.43,6.43,0,0,0-.08-.78l0-.17a13.16,13.16,0,0,0-.81-3.34l-.16-.44c-.27-.71.38-3.4,0-4s-.9-.32-1.41-.92c-.21-.24-.42-.47-.65-.69a17.48,17.48,0,0,0-2-1.62,11,11,0,0,0-1.92-1.06,11.22,11.22,0,0,0-.89-1.81,7.33,7.33,0,0,0-.75-1.07,10.54,10.54,0,0,0-5.48-3.67c-.3-.09-.6-.17-.9-.23a11.54,11.54,0,0,0-2.26-.22,10.14,10.14,0,0,0-1.36.08,12.16,12.16,0,0,0-1.22.22c-.46.11-.65.17-.8.22l-.37.12a6.75,6.75,0,0,0-.78.29,18.45,18.45,0,0,0-1.72.8l-.12.06c-1.45.76-2.67,1.51-3.85,2.24l-.45.29a92,92,0,0,0-13.36,10.72c-3.59,3.31-7.19,6.93-11.35,11.39-3.36,3.61-6.64,7.32-9.79,11l-.72-.7a8.51,8.51,0,0,0-5.91-2.38,8.4,8.4,0,0,0-3.36.7c9.52-14.17,23.26-35.56,35.44-54.62,1.92-3,3.58-5.61,3.83-6a8.5,8.5,0,0,0-2.85-12.17l-4.38-2.48a8.5,8.5,0,0,0-10.62,1.82c-1.19,1.38-3.27,4.34-6.3,8.7-1,1.46-2.06,3-2.48,3.52l-.13.18c-5.31,7.57-10.74,15-16.2,22.28-.77,0-1.47-.07-2.06-.08h-.18a40.89,40.89,0,0,0-11.92,2l-.17.06a64,64,0,0,0-19.16,10.79,128.6,128.6,0,0,0-14.77,13.93c-4.24,4.55-8.38,9.39-12.65,14.8-.79,1-1.54,2-2.29,3-.25,0-.5,0-.76,0a8.41,8.41,0,0,0-4.72,1.44c-1.05.7-2.26,1.37-3.54,2.09l-.32.17-6,3.43q2.38-3.64,4.69-7.25l3.44-5.39c1.12-1.38,2.17-2.75,3.11-4,1.09-1.44,2.25-3,3.43-4.93l.22-.38a15.44,15.44,0,0,0,1.35-2.87c.07-.19.13-.36.18-.55a8.85,8.85,0,0,0,.28-1.17l0-.13c.05-.31.1-.62.13-.94a11.48,11.48,0,0,0,.06-1.46,12.81,12.81,0,0,0-.14-1.52,1.85,1.85,0,0,0,0-.23,10.51,10.51,0,0,0-.52-2c0-.06,0-.12-.07-.19a11.69,11.69,0,0,0-6.32-6.59,12,12,0,0,0-4.57-1H144a11.1,11.1,0,0,0-1.81.18,10.69,10.69,0,0,0-2.1.58c-.42.16-.84.35-1.24.55l-.17.09a14,14,0,0,0-1.69,1l-.31.23-.55.43c-.76.62-1.29,1.12-1.65,1.46l-1.16,1.12c-1.41,1.41-2.72,2.81-3.79,4-2.47,2.67-4.8,5.36-7,7.91-2.41,2.85-4.79,5.76-7.14,8.7a35.45,35.45,0,0,0,1.6-3.58.78.78,0,0,1,0-.14,22.7,22.7,0,0,0,1.39-6.15,1,1,0,0,1,0-.17,17.54,17.54,0,0,0-.51-5.54,15.92,15.92,0,0,0-4.24-7.36,16.78,16.78,0,0,0-6.44-3.94l-.12,0c6.54-9.56,13-19.31,19.06-28.55l9.59-14.81A154.65,154.65,0,0,0,145.39,44a82,82,0,0,0,4.07-9.78l.06-.21a36.59,36.59,0,0,0,2-13.52,24.26,24.26,0,0,0-.83-5c0-.09,0-.18-.08-.26A20.76,20.76,0,0,0,148,9.51a19.86,19.86,0,0,0-4.7-4.94A21.19,21.19,0,0,0,138,1.67,27,27,0,0,0,129.3,0h-1.15a42.77,42.77,0,0,0-5.67.4,68.19,68.19,0,0,0-10.86,2.47c-2.92.9-6,2-9.39,3.33-1.5.59-3,1.2-4.38,1.8l-1.11.46-.49.21L95,9.25c-.68.31-1.44.65-2.24,1.09a78.68,78.68,0,0,0-8.86,5.45A140,140,0,0,0,68.71,28a145.3,145.3,0,0,0-13.3,13.9c-.37.43-.72.88-1.08,1.34-.15.19-.29.39-.45.57a1.47,1.47,0,0,1-.1.13c-.12.15-12.41,15.95-13.05,16.85A8.51,8.51,0,0,0,43,72.9l4.23,2.72A8.61,8.61,0,0,0,51.91,77a8.38,8.38,0,0,0,6.42-3c.39-.46,5.05-5.72,8.46-9.56l5-5.64.54-.6c.22-.25.44-.5.73-.8A132.86,132.86,0,0,1,98,37a54.14,54.14,0,0,1,6.31-3.48l.2-.1c.16-.08.32-.13.47-.19l.84-.35.21-.08.42-.16,1.08-.41c1.33-.49,2.65-1,3.93-1.42a85,85,0,0,1,10.36-3c-.5,1.15-1.08,2.38-1.76,3.7a157.84,157.84,0,0,1-8.25,13.7l-9.8,14.61L87.56,81.48l0,0A13,13,0,0,0,85,76.91a11.33,11.33,0,0,0-3.48-2.68,11.54,11.54,0,0,0-4.24-1.16l-.91,0a14,14,0,0,0-5.9,1.35l-.4.18a25.55,25.55,0,0,0-3.61,2.17,53.81,53.81,0,0,0-9.11,8.49,7.59,7.59,0,0,0-.14,9.8,7.47,7.47,0,0,0,3.7,2.45L59.71,99c-9,12.34-17.64,24.81-24.11,34.29-5.78,8.45-11.57,17.06-17.16,25.39l-6.1,9.08c-.91,1.34-2.37,3.53-4,5.91-2.6,3.88-5.57,8.3-7,10.47a7.57,7.57,0,0,0,1.25,9.94l4.17,3.69a7.58,7.58,0,0,0,10.55-.5c2.93-3.12,11-12,13.81-15.27A402.5,402.5,0,0,0,57,147.9c.8-1.18,1.61-2.38,2.41-3.58L61,145.44a8.53,8.53,0,0,0,9,.36l6-3.44c-2.43,3.4-4.92,6.81-7.35,10.14l-2.28,3.13c-2,2.82-4.15,5.73-6.22,8.74-1,1.45-2.16,3.18-3.31,5.06-.5.81-1.15,1.9-1.79,3.17-.4.8-.73,1.52-1,2.27l-.17.44a15.27,15.27,0,0,0-1,4.41c0,.18,0,.43,0,.61A12.69,12.69,0,0,0,55.25,188l.07.11a12.63,12.63,0,0,0,5,4,13.46,13.46,0,0,0,3.85,1l.24,0c.47,0,.89.06,1.29.06a12.63,12.63,0,0,0,1.33-.07,13.27,13.27,0,0,0,2-.35c.39-.1.8-.21,1.16-.33l.41-.14.52-.2.34-.14a24.77,24.77,0,0,0,4.39-2.5l.1-.08a63.46,63.46,0,0,0,5.24-4.2c2.45-2.19,4.74-4.42,6.92-6.58q0,.51.09,1.14t.15,1.11l.06.34a16.69,16.69,0,0,0,.43,1.68c0,.09.07.23.1.32a12.69,12.69,0,0,0,.73,1.9c.31.64.65,1.26,1,1.83a16.16,16.16,0,0,0,3.84,4.21l.18.13a16.53,16.53,0,0,0,8.49,3.12c.41,0,.82,0,1.15.05h.45a13.73,13.73,0,0,0,1.47-.08l1.56-.21.23,0c.5-.09.91-.19,1.34-.3l.43-.11a14.16,14.16,0,0,0,1.47-.44,36.58,36.58,0,0,0,3.92-1.64,54.79,54.79,0,0,0,5.79-3.4,104.36,104.36,0,0,0,9.16-6.94c1.18-1,2.32-2,3.46-3a1.62,1.62,0,0,1,0,.22,17.92,17.92,0,0,0,1.09,5.72,16,16,0,0,0,1,2.2l.13.22a13.4,13.4,0,0,0,1.4,2.05,15.75,15.75,0,0,0,4,3.53,16,16,0,0,0,4.2,1.85,13.26,13.26,0,0,0,2,.42l.2,0c.48.07,1,.12,1.45.15H150c.58,0,1.11,0,1.68-.06l.24,0c.59-.06,1.07-.14,1.58-.23h.08a15.14,15.14,0,0,0,1.61-.36l.4-.11a12.59,12.59,0,0,0,1.3-.4,38.31,38.31,0,0,0,6.54-3c1.93-1.08,3.57-2.18,4.91-3.1l2.06-1.42a15.24,15.24,0,0,0,7,4.51l.3.09a16.74,16.74,0,0,0,2.61.5l.27,0c.54,0,1,.06,1.49.06a16.63,16.63,0,0,0,4.21-.54l.44-.12a22.81,22.81,0,0,0,4.69-1.9l.16-.09a44,44,0,0,0,5-3.23c5-3.67,9.35-7.48,13.14-10.82,1.29-1.16,2.53-2.28,3.74-3.4-.08.74-.15,1.47-.18,2.24,0,.05,0,.11,0,.16a24.84,24.84,0,0,0,.89,7.88l.09.31.26.81c.06.18.13.37.2.55.19.47.42,1,.65,1.43l.29.58a7.81,7.81,0,0,0,.45.78l.32.5.3.43a14.53,14.53,0,0,0,1.42,1.78,20.78,20.78,0,0,0,1.81,1.69l.24.19a17.79,17.79,0,0,0,2.51,1.58,15.28,15.28,0,0,0,3.15,1.23l.2.06c.48.13,1,.24,1.45.33l.45.07c.4.05.81.09,1.31.12s.91,0,1.35,0a12.23,12.23,0,0,0,1.53-.09c.55-.06,1.1-.14,1.66-.24a12.48,12.48,0,0,0,1.85-.46l.24-.07c.51-.16,1.14-.37,1.54-.53l.74-.32c.7-.31,1.49-.66,2.38-1.13a50.92,50.92,0,0,0,8.68-6,67.12,67.12,0,0,0,5.58-5.06c3.7-3.77,7.26-7.72,10.9-12.08l1.86-2.26.7.69a8.08,8.08,0,0,0,1.29,1.06,30.71,30.71,0,0,0-1.24,6.82,22.14,22.14,0,0,0,2.45,11.88,14.05,14.05,0,0,0,11.82,7.66l.53,0c4.76,0,7.64-2.51,18.08-15.76q4.86-6.17,10.24-12.52a51.56,51.56,0,0,0-1.29,8.93c-.81,15.57,8.65,21.69,17.76,22.23.32,0,.63,0,.95,0h0c8.14,0,17.89-6,31.58-19.5a8.5,8.5,0,0,0-.34-12.44l-3-2.63a8.48,8.48,0,0,0-11.44.18,100.66,100.66,0,0,1-7.81,6.69,50.16,50.16,0,0,1,4.8-9,206,206,0,0,1,16.4-21.65l.23-.28c9.37-11.91,9.78-12.88,10.31-14.13a15.34,15.34,0,0,0,1.21-5.2C371.29,110.26,366.81,103.17,358.21,102.66ZM47.35,144A394.2,394.2,0,0,1,22,177.47c-2.7,3.15-10.72,12-13.56,15l-4.18-3.68c2.4-3.52,8.67-12.88,11-16.41,7.72-11.47,15.4-23,23.23-34.43s15.71-22.82,24-34.09l1.61-2.16q.75-1,1.47-2c1-1.33,1.86-2.7,2.73-4.1a48.07,48.07,0,0,0,2.35-4.26,21.77,21.77,0,0,0,1.62-4.25,6.67,6.67,0,0,0,.22-1.7c0-.19,0-.34,0-.4a1,1,0,0,0,.2.09h.08s.05,0,0,0a2.66,2.66,0,0,0-1.58,0,17.38,17.38,0,0,0-2.27.72A47.05,47.05,0,0,0,64.27,88c-1.55.79-3.06,1.67-4.59,2.55a45.29,45.29,0,0,1,7.8-7.32,16.88,16.88,0,0,1,2.46-1.48A6.54,6.54,0,0,1,73.46,81a3.24,3.24,0,0,1,.64.12,3,3,0,0,1,.68.26,3.8,3.8,0,0,1,1.18.94A5.52,5.52,0,0,1,77,84.24a9.87,9.87,0,0,1,.42,3.49,25.16,25.16,0,0,1-1,5.82,47.84,47.84,0,0,1-1.89,5.28,54.43,54.43,0,0,1-2.4,5c-.44.82-.89,1.63-1.37,2.43l-1.27,2.19C62.59,120.52,55.22,132.44,47.35,144Zm33.92,27.7c-2.57,2.58-5.16,5.15-8,7.63a56.14,56.14,0,0,1-4.49,3.61,16.2,16.2,0,0,1-3,1.72l-.52.2-.65.18a6,6,0,0,1-.83.13,4.35,4.35,0,0,1-.95,0,4.24,4.24,0,0,1-1.39-.37A4.07,4.07,0,0,1,60,183.51a4.23,4.23,0,0,1-.8-2.76,7.74,7.74,0,0,1,.56-2.38c.23-.57.46-1.06.7-1.53.48-.93,1-1.77,1.47-2.59,1-1.63,2-3.16,3.06-4.68,2.08-3,4.2-5.95,6.32-8.88,4.25-5.83,8.51-11.59,12.57-17.45s8-11.77,11.45-17.74a31,31,0,0,0,1.49-3A31.8,31.8,0,0,0,93,123.61a125.41,125.41,0,0,0-18.67,9l-9.17,5.25,0,0-1.6.91-4.92-3.36,1.52-2L67.56,123,70,119.53l2.5-3.57,5-7.23,9.82-14.54L106.86,65l9.8-14.61a162.33,162.33,0,0,0,8.73-14.52,62.5,62.5,0,0,0,3.26-7.34,28.91,28.91,0,0,0,1-3.53,14.91,14.91,0,0,0,.34-3,5.87,5.87,0,0,0-.12-1.06,4.17,4.17,0,0,0-.21-.59,1.73,1.73,0,0,0-.89-.71,8.67,8.67,0,0,0-2.64-.54,23.19,23.19,0,0,0-3.59.1,75.9,75.9,0,0,0-16.12,4.06c-1.35.48-2.71,1-4.09,1.48l-1,.4-.53.2-.45.18c-.59.26-1.16.45-1.78.75a64.13,64.13,0,0,0-7.29,4A142.42,142.42,0,0,0,64.63,52c-.5.52-1,1.06-1.44,1.58S50,68.45,49.62,68.86L45.4,66.14c.45-.64,12.38-16,12.83-16.55s.93-1.22,1.43-1.79A136.6,136.6,0,0,1,72.21,34.67,132.34,132.34,0,0,1,86.43,23.19a70.37,70.37,0,0,1,8.07-5c.69-.39,1.5-.73,2.28-1.08l.58-.26.49-.21,1-.43c1.38-.59,2.79-1.17,4.22-1.74,2.85-1.12,5.76-2.18,8.77-3.11a59.62,59.62,0,0,1,9.5-2.17,33.84,33.84,0,0,1,5.32-.31A18.75,18.75,0,0,1,132.77,10,13.27,13.27,0,0,1,136,11.81a11.9,11.9,0,0,1,2.7,2.87,13,13,0,0,1,1.56,3.38,15.68,15.68,0,0,1,.55,3.25,28.64,28.64,0,0,1-1.68,10.55,73.3,73.3,0,0,1-3.65,8.77,150.54,150.54,0,0,1-9.08,15.8l-9.59,14.8c-6.46,9.82-12.94,19.63-19.6,29.34-1,1.54-5.68,8.44-10.12,15.05a41.78,41.78,0,0,1,4.39-2.56,17.65,17.65,0,0,1,4.23-.92,17.71,17.71,0,0,1,4-.16,10.44,10.44,0,0,1,2.64.53,8.23,8.23,0,0,1,3.17,1.93,7.59,7.59,0,0,1,2,3.43,8.88,8.88,0,0,1,.25,2.92,14.3,14.3,0,0,1-.91,3.95,33.12,33.12,0,0,1-2.86,5.62c-4,6.35-8.25,12.24-12.67,18.06s-9,11.43-13.52,17c-2.1,2.58-4.19,5.15-6.2,7.72,2.1-1.64,4.2-3.34,6.27-5.07,5.53-4.62,11-9.42,16.53-14.09,2-1.68,4-3.36,6-5l1.36,1.29c-1.82,1.89-3.64,3.79-5.44,5.7C91.38,161.26,86.41,166.51,81.27,171.68Zm55.24-9.9c-4.9,4.66-9.88,9.1-15.07,13.49a95.41,95.41,0,0,1-8.36,6.34,43,43,0,0,1-4.85,2.86,26,26,0,0,1-3,1.26c-.25.1-.61.18-.92.27s-.63.16-1,.23-.82.12-1.23.16a5.13,5.13,0,0,1-.71,0c-.27,0-.53,0-.8,0a8,8,0,0,1-4.07-1.5A7.94,7.94,0,0,1,94.7,183a10.81,10.81,0,0,1-.57-1.06,5.53,5.53,0,0,1-.36-1,9,9,0,0,1-.23-.93c0-.25-.08-.51-.11-.76a8.3,8.3,0,0,1-.05-1.37,9.72,9.72,0,0,1,.07-1.15c0-.37.09-.7.14-1a28.37,28.37,0,0,1,1.94-6.09c.38-.88.8-1.74,1.21-2.55.27-.49.61-1.05.92-1.57l.73-1.12c1-1.48,1.9-2.86,2.87-4.27,7.7-11.07,15.84-21.7,24.53-32,2.19-2.57,4.4-5.12,6.72-7.62,1.14-1.25,2.32-2.51,3.56-3.75l1-1c.33-.32.65-.62,1.12-1l.42-.33a5.69,5.69,0,0,1,.79-.5l.45-.2a4.13,4.13,0,0,1,.52-.14,3.66,3.66,0,0,1,.65-.06,3.19,3.19,0,0,1,1.23.25,3.1,3.1,0,0,1,1.14.79,3.45,3.45,0,0,1,.62,1,2.35,2.35,0,0,1,.17.65,3.42,3.42,0,0,1,0,.45,1.22,1.22,0,0,1,0,.32c0,.13,0,.26,0,.39a4.48,4.48,0,0,1-.12.47,7.93,7.93,0,0,1-.78,1.6c-1,1.6-2,3-3,4.33l-6.92,9.9c-7.19,11.22-14.66,22.33-22.22,33.23-.94,1.35-1.91,2.73-2.78,4l-.66,1c-.12.19-.23.34-.37.57l-.12.24.42-.22c2.72-1.46,5.5-3.15,8.26-4.89,5.59-3.55,11.31-7.14,17.06-10.56q4.34-2.58,8.71-5.09l4.39-2.51c1.48-.83,3-1.64,4.36-2.58a70.55,70.55,0,0,1-6.69,7.72C141.37,157.08,139,159.45,136.51,161.78Zm76-4.14c-3.77,3.78-7.67,7.42-11.66,11s-8.06,7-12.54,10.33a36.27,36.27,0,0,1-4,2.6,15.29,15.29,0,0,1-3.1,1.28,8.63,8.63,0,0,1-3.15.3,9.14,9.14,0,0,1-1.29-.25,6.88,6.88,0,0,1-4-3,7.71,7.71,0,0,1-.63-1.25,10.12,10.12,0,0,1-.31-1c-.06-.29-.12-.62-.15-.88s0-.5,0-.73a11.07,11.07,0,0,1,.16-2.1,18.41,18.41,0,0,1,.73-2.78c.08-.23.16-.43.24-.65-1.87,1.61-3.72,3.24-5.72,4.72l-3.81,2.95-4,2.75c-1.32.91-2.69,1.82-4.24,2.68a29.81,29.81,0,0,1-5.23,2.43c-.25.09-.58.18-.87.26s-.57.16-1,.23-.71.13-1.12.17-.9.05-1.39,0q-.44,0-.87-.09a6.43,6.43,0,0,1-.92-.18,7.66,7.66,0,0,1-4-2.62,6.27,6.27,0,0,1-.64-1,8.08,8.08,0,0,1-.48-1,9.45,9.45,0,0,1-.58-3,13.45,13.45,0,0,1,.14-2.12,21.22,21.22,0,0,1,.75-3.11,40.3,40.3,0,0,1,2-5c.72-1.53,1.49-3,2.28-4.41,1.56-2.84,3.26-5.54,5-8.19,3.46-5.29,7.18-10.34,11-15.26s7.92-9.68,12.19-14.27a119.67,119.67,0,0,1,13.77-13A56.33,56.33,0,0,1,201.73,104a32.6,32.6,0,0,1,9.46-1.66,22.11,22.11,0,0,1,4.74.49c.37.08.75.17,1.12.28,6.66-8.71,13.12-17.54,19.47-26.59,1.4-1.89,6.85-10,8.37-11.71l4.38,2.49c-1.42,2.1-41,64.69-49,74.36q-2.24,2.72-4.53,5.38c-1.63,3.47-3.28,6.91-4.81,10.28-1,2.3-2.1,4.6-3.14,6.87l5.76-4.38c4.21-3.17,8.45-6.35,12.81-9.41s8.77-6.07,13.33-8.91c.56-.35,1.12-.68,1.68-1l3.78,3.64c-.56.63-1.11,1.27-1.68,1.9Q218.14,152,212.48,157.64Zm53-6.64c-3.11,4.09-6.27,8-9.54,11.94s-5.73,6.78-9.42,10.54c-1.87,1.87-3.82,3.71-5.95,5.48a42.29,42.29,0,0,1-7.24,5c-.72.37-1.53.72-2.3,1.06-.24.1-.6.22-.9.31a7.33,7.33,0,0,1-1,.27c-.4.07-.8.13-1.2.17a8.23,8.23,0,0,1-1.4,0c-.24,0-.48,0-.72-.07a7.49,7.49,0,0,1-.79-.18,6.68,6.68,0,0,1-1.51-.56,9.67,9.67,0,0,1-1.36-.83,14,14,0,0,1-1-1,8.91,8.91,0,0,1-.75-1l-.33-.5-.22-.45c-.15-.3-.29-.61-.41-.91l-.27-.8a16.55,16.55,0,0,1-.56-5.33,28.8,28.8,0,0,1,.52-4.41,56.16,56.16,0,0,1,5.62-15.37,63.69,63.69,0,0,1,4.27-6.94c.78-1.12,1.62-2.21,2.5-3.27l2.46-2.93q4.92-5.84,10.15-11.45c3.49-3.74,6.08-5.42,9.89-8.93S262.74,111,267.22,108c1.16-.72,2.28-.43,3.54-1.08.33-.17.63-.33,1.15-.55l.26-.09.15,0,.24-.07.37-.06a2.6,2.6,0,0,1,.88.05,2.27,2.27,0,0,1,1.47.95c.27.46.37.55.41.54a3.07,3.07,0,0,1-.16.66c0,.08-.07.16-.11.25s-1.14,2.23-1.2,2.32-.19.25-.27.35a16.43,16.43,0,0,1-1.6,1.51c-.94.79-1.89,1.55-2.83,2.29a31.67,31.67,0,0,1,3.05-1.4l1.13-.38c.41-.11.85-.21,1.28-.3a12.23,12.23,0,0,1,1.54-.14l1,.09a4.37,4.37,0,0,1,.48.08c.18,0,.37.11.55.18a4.85,4.85,0,0,1,1.09.5,8.74,8.74,0,0,1,1,.81,7.92,7.92,0,0,1,.71,1,2.53,2.53,0,0,1,.25.49l.18.47a7.25,7.25,0,0,1,.36,1.72q0,.73,0,1.41a19.44,19.44,0,0,1-1,4.45,51,51,0,0,1-3.16,7.4c-1.19,2.33-2.45,4.59-3.8,6.79A145,145,0,0,1,265.47,151Zm92.09-29.91q-.49,1.16-9.17,12.18a214.78,214.78,0,0,0-17.07,22.56q-7.08,10.89-7.46,18.4t2.59,7.69q6.6.39,20.82-13l3,2.63q-17.79,17.52-26.07,17-10.43-.62-9.77-13.29t10-28.62l14.88-23.63a172.27,172.27,0,0,0-27.08,24.2q-12,13.32-21.94,25.92t-11.43,12.52A5.64,5.64,0,0,1,274,182.5a13.77,13.77,0,0,1-1.43-7.39q.23-4.35,3.37-11.46t7.93-17.21l-13.53,14.05-.3.29-2.71-2.7q6.89-7,12.16-13.54,5.94-7.66,24.35-29.2c1.38-1.8,2.77-2.66,4.19-2.58q5.74.34,5.49,5.27a6.81,6.81,0,0,1-.78,2.78q-20.67,28.24-25.28,43,52.41-51.81,63-51.18a8.93,8.93,0,0,1,1.93-.13q6,.36,5.66,6.23A6.89,6.89,0,0,1,357.56,121.09Zm-81.43-2a0,0,0,0,0,0,0l-.26,0a.25.25,0,0,0,.13,0Zm-1.71.14a28.78,28.78,0,0,0-3.27,1,35.36,35.36,0,0,0-11.9,7.82,19.12,19.12,0,0,0-4.11,5.77,7.24,7.24,0,0,0-.67,3.35,4.55,4.55,0,0,0,1.56,3.1c-1.12-.58-2.08-.64-2.44-1.93a8.55,8.55,0,0,1-.1-4,26,26,0,0,1,1.23-4.05c-1.21,1.52-2.41,3.08-3.82,4.86-3.08,3.9-6.08,7.87-9.09,11.84l-2.22,3c-.66.92-1.31,1.85-1.93,2.81a54.62,54.62,0,0,0-3.32,6,48.55,48.55,0,0,0-4.23,12.63c-.1.63-.18,1.24-.23,1.83a40.85,40.85,0,0,0,3.36-2.52c.9-.7,1.77-1.52,2.66-2.29s1.75-1.61,2.61-2.47c3.49-3.35,6.84-7,10.18-10.65s5.63-6.49,8.88-10.2,6.23-7.56,9.09-11.5c1.42-2,2.81-4,4.09-6a51.83,51.83,0,0,0,3.37-6,13.88,13.88,0,0,0,.95-2.58Zm-3.22-11.68h0a.28.28,0,0,1-.05.08s0,0,.05,0A.14.14,0,0,0,271.2,107.52Zm-.29-.15c0,.06,0,.15,0,.29a.2.2,0,0,0,.11,0C271,107.49,270.91,107.23,270.91,107.37Zm-56.14-1.25c.6-.76,1.17-1.53,1.76-2.3a21.79,21.79,0,0,0-5.18.34,30.94,30.94,0,0,0-8.35,2.93,58.09,58.09,0,0,0-14,10.78,86.45,86.45,0,0,0-6,6.61c-1.92,2.31-3.82,4.66-5.65,7.07q-5.51,7.22-10.59,14.76c-3.4,5-6.65,10.11-9.68,15.26-1.51,2.58-2.93,5.19-4.24,7.78-.41.81-.8,1.63-1.18,2.44l1-.7,3.57-2.52,3.47-2.73c2.35-1.76,4.53-3.81,6.78-5.73s4.4-4,6.58-6.08,4.28-4.2,6.36-6.39q6.3-6.46,12.27-13.32C199.65,125.23,207.3,115.76,214.77,106.12ZM183.4,175.67a0,0,0,0,0,0,0C183.39,175.76,183.4,175.8,183.4,175.67Zm-34,2.73v0h0a.51.51,0,0,0,0-.1A.27.27,0,0,1,149.37,178.4Zm-11.23-62.15a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm-36.69,58.82,0,0,.22,0h-.16Zm-38.16,3.55.12,0a.13.13,0,0,0-.09,0Zm0,0,0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm38.21-3.55-.08,0,0,0,.22,0Zm36.61-58.8a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm11.23,62.06a.27.27,0,0,1,0,.09v0h0A.51.51,0,0,0,149.37,178.31Zm34-2.61c0,.06,0,.1,0,0A0,0,0,0,0,183.39,175.7Zm28-71.54a30.94,30.94,0,0,0-8.35,2.93,58.09,58.09,0,0,0-14,10.78,86.45,86.45,0,0,0-6,6.61c-1.92,2.31-3.82,4.66-5.65,7.07q-5.51,7.22-10.59,14.76c-3.4,5-6.65,10.11-9.68,15.26-1.51,2.58-2.93,5.19-4.24,7.78-.41.81-.8,1.63-1.18,2.44l1-.7,3.57-2.52,3.47-2.73c2.35-1.76,4.53-3.81,6.78-5.73s4.4-4,6.58-6.08,4.28-4.2,6.36-6.39q6.3-6.46,12.27-13.32c8-9.09,15.66-18.56,23.13-28.2.6-.76,1.17-1.53,1.76-2.3A21.79,21.79,0,0,0,211.35,104.16Zm0,0a30.94,30.94,0,0,0-8.35,2.93,58.09,58.09,0,0,0-14,10.78,86.45,86.45,0,0,0-6,6.61c-1.92,2.31-3.82,4.66-5.65,7.07q-5.51,7.22-10.59,14.76c-3.4,5-6.65,10.11-9.68,15.26-1.51,2.58-2.93,5.19-4.24,7.78-.41.81-.8,1.63-1.18,2.44l1-.7,3.57-2.52,3.47-2.73c2.35-1.76,4.53-3.81,6.78-5.73s4.4-4,6.58-6.08,4.28-4.2,6.36-6.39q6.3-6.46,12.27-13.32c8-9.09,15.66-18.56,23.13-28.2.6-.76,1.17-1.53,1.76-2.3A21.79,21.79,0,0,0,211.35,104.16Zm-28,71.54c0,.06,0,.1,0,0A0,0,0,0,0,183.39,175.7Zm-34,2.61a.27.27,0,0,1,0,.09v0h0A.51.51,0,0,0,149.37,178.31Zm-11.23-62.06a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm-36.61,58.8-.08,0,0,0,.22,0ZM63.32,178.6l0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm0,0,0,0,.12,0A.13.13,0,0,0,63.32,178.6Zm38.21-3.55-.08,0,0,0,.22,0Zm36.61-58.8a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm0,0a.34.34,0,0,0,0,.17,1.57,1.57,0,0,0,0,.23v.08C138.12,116.48,138.18,116.24,138.14,116.25Zm-36.61,58.8-.08,0,0,0,.22,0ZM63.32,178.6l0,0,.12,0A.13.13,0,0,0,63.32,178.6Z"/><path class="cls-2" d="M162.28,76.74a11.67,11.67,0,1,0,12,11.67A11.86,11.86,0,0,0,162.28,76.74Zm-2,17.61a5.94,5.94,0,1,1,6.13-5.94A6,6,0,0,1,160.28,94.35Z"/><path class="cls-2" d="M275.7,107.64s0,0,0,0S275.69,107.55,275.7,107.64Z"/></g></g></svg>
                </a>
            </figure>
            <section id="shoppingcart" class="shoppingcart right">
                
            </section>  
        <div class="clr"></div>
	</header><!-- #header -->