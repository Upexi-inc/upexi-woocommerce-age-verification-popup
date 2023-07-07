<?php
/**
 * Plugin Name: Upexi Age Verification Popup for WooCommerce
 * Plugin URI: https://github.com/tylly
 * Description: Implement custom age verification popup for WooCommerce.
 * Author: Upexi Inc.
 * Version: 1.0
 * Author URI: https://github.com/tylly
 */



add_action('wp_footer', 'popup_render');

function popup_render() {
    // Code to render the popup goes here
    include(plugin_dir_path(__FILE__) . 'views/public/popup.php');
}


add_action( 'wp_enqueue_scripts', 'upexi_age_verification_scripts' );

function upexi_age_verification_scripts() {
    wp_enqueue_style( 'upexi_age_verification_style', plugins_url( 'assets/styles/popup.css', __FILE__ ), array(), '1.0' );
    wp_enqueue_script( 'upexi_age_verification_script', plugins_url( 'assets/js/main.js', __FILE__ ), array(), '1.0.4`', true );
}

