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

 function popup_render()
 {
     if (!is_page('login') && !is_page('my-account') && !is_page('privacy-policy') && !is_page('terms-of-service')) {
         // Code to render the popup goes here
         include(plugin_dir_path(__FILE__) . 'views/public/popup.php');
     }
 }

add_action('wp_enqueue_scripts', 'upexi_age_verification_scripts');
function upexi_age_verification_scripts()
{
    //if the user is on any page other than the log in page, privacy policy or servrice terms, enqueue the scripts
    if (!is_page('login') && !is_page('my-account') && !is_page('privacy-policy') && !is_page('terms-of-service')) {
        wp_enqueue_style('upexi_age_verification_style', plugins_url('assets/styles/popup.css', __FILE__), array(), '1.0');
        wp_enqueue_script('upexi_age_verification_script', plugins_url('assets/js/main.js', __FILE__), array(), '1.0.5`', true);
        // Localize the script with new data
        $current_user = wp_get_current_user();
        wp_localize_script('upexi_age_verification_script', 'userData', array(
            'userID' => $current_user->ID
        ));
    }
}

add_action('wp_logout', 'clear_age_verified_on_logout');

function clear_age_verified_on_logout() {
    echo "
    <script>
    // if age_verified is set, remove it
    if (localStorage.getItem('age_verified')){
    localStorage.removeItem('age_verified');
    }
    </script>
    ";
}