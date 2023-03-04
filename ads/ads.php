<?php
defined('ABSPATH') || exit;


include get_template_directory() . '/ads/ads-header.php';
include get_template_directory() . '/ads/ads-inline-article-shortcode.php';
include get_template_directory() . '/ads/google-adsense-code.php';





function mnads_loader() {
    if (is_home()) {
        include get_template_directory() . '/ads/ads-home-after-menu.php';
        include get_template_directory() . '/ads/ads-home-row-one.php';
    } elseif (is_single()) {
        include get_template_directory() . '/ads/ads-after-content.php';
    }
}

add_action('wp', 'mnads_loader');