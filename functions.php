<?php

/*  Register Scripts and Style */

function theme_register_scripts() {
    wp_enqueue_style( 'bier-css', get_stylesheet_uri() );
    wp_enqueue_script( 'bier-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/bier.min.js' ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );




add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-font-size' );

/* Add menu support - disable gutenberg font/size*/
if (function_exists('add_theme_support')) {
    add_theme_support('menus');

}

/* Add post image support */
add_theme_support( 'post-thumbnails' );


/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
}

if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
}


/* Add widget support */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'          => 'Primary',
        'id'            => 'primary',
	    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="filtertitle">',
        'after_title'   => '</h4>',
    ));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'          => 'Woocommerce',
        'id'            => 'sidebarwoo',
	    'before_widget' => '<div id="%1$s" class="sidebar-filter %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="filter-title">',
        'after_title'   => '</h4>',
    ));


/*  EXCERPT 
    Usage:
    
    <?php echo excerpt(100); ?>
*/

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
 //Woocommerce
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woo-setup.php';
}

/* if ( ! class_exists( 'Simple_Page_Ordering' ) ) {
    require get_template_directory() . '/inc/simple-page-ordering/simple-page-ordering.php';
} */
 


