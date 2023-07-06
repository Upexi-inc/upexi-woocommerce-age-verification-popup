<?php
/**
 * Plugin Name: Upexi Age Verification Popup for WooCommerce
 * Plugin URI: https://github.com/tylly
 * Description: Implement custom age verification popup for WooCommerce.
 * Author: Upexi Inc.
 * Version: 1.0
 * Author URI: https://github.com/tylly
 */

register_activation_hook(__FILE__, 'uap_install');

function uap_install() {
    // Activation logic goes here
}

add_action('wp_footer', 'homepage_popup_render');

function homepage_popup_render() {
    // Code to render the popup goes here
    include 'views/public/popup.php';
}
