<?php
function bier_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'bier_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );
?>