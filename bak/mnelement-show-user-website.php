<?php
defined('ABSPATH') || exit;

function mnelement_show_user_website() {
    $userID = mncore_authorID();
    $userWebsite = carbon_get_user_meta($userID, 'website_url_user');
    return $userWebsite;
}