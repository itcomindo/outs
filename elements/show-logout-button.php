<?php
defined('ABSPATH') || exit;

/**
 * Function to show logout button for logged in users
*/
function mnel_show_logout_button() {
    // if user is logged in
    if (is_user_logged_in()) {
        $logoutButton = '<a href="' . wp_logout_url() . '" class="globalLogoutButton">Logout</a>';
        return $logoutButton;
    }
}
