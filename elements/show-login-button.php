<?php
defined('ABSPATH') || exit;

/**
 * Function to show login button for not logged in users
 */
function mnel_show_login_button() {
    // if user is not logged in
    if (!is_user_logged_in()) {
        $loginButton = '<a href="' . wp_login_url() . '" class="globalLoginButton">Login</a>';
        return $loginButton;
    }
}