<?php 

/**
 * Ebor Framework
 * Queue Up Framework
 * @since version 1.0
 * @author TommusRhodus
 */
require_once ( "ebor_framework/init.php" );

/**
 * Please use a child theme if you need to modify any aspect of the theme, if you need to, you can add code
 * below here if you need to add extra functionality.
 * Be warned! Any code added here will be overwritten on theme update!
 * Add & modify code at your own risk & always use a child theme instead for this!
 */

/** commenting the redirect to checkout page **/
add_filter ('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}

add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 + 
function woo_custom_cart_button_text() {return __( 'Purchase', 'woocommerce' );}