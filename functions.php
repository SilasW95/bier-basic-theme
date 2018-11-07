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
    add_theme_support( 'post-thumbnails' );
        add_image_size('img_homeIntro',515,9999);
}




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


//remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price',10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title' ,10 );
add_action( 'woocommerce_after_shop_loop_item', 'bier_product_loop_detail_wrapper', 6);
 
function bier_product_loop_detail_wrapper() {
    global $product;
   // var_dump($product);

    echo '<section class="product-detail-wrapper">';
    echo '<h2 class="woocommerce-loop-product_title">'. get_the_title() .'</h2>';
    if ( $price_html = $product->get_price_html() ) : ?>
	    <span class="price"><?php echo $price_html; ?></span>
    <?php endif; 
    echo '</section>';


   // $link = $product->get_permalink();
   // echo '<a href="' . $link . '" class="button addtocartbutton">View Product</a>';

   //var_dump($product);
}






//remove adminbar
add_filter('show_admin_bar', '__return_false');

 





