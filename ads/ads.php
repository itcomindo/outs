<?php
defined('ABSPATH') || exit;


include get_template_directory() . '/ads/mnads-ads-header.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode.php';
include get_template_directory() . '/ads/mnads-google-adsense-code.php';





function mnads_loader() {
    if (is_home()) {
        include get_template_directory() . '/ads/mnads-ads-home-after-menu.php';
        include get_template_directory() . '/ads/mnads-ads-home-row-one.php';
    } elseif (is_single()) {
        include get_template_directory() . '/ads/mnads-ads-after-content.php';
    }
}

add_action('wp', 'mnads_loader');