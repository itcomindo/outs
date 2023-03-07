<?php
defined('ABSPATH') || exit;


include get_template_directory() . '/ads/mnads-google-adsense-code.php';
include get_template_directory() . '/ads/mnads-ads-header.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode-2.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode-3.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode-4.php';
include get_template_directory() . '/ads/mnads-ads-inline-article-shortcode-5.php';
include get_template_directory() . '/ads/mnads-ads-multiplex.php';
include get_template_directory() . '/ads/mnads-ads-multiplex-home.php';





function mnads_loader()
{
    if (is_home()) {
        include get_template_directory() . '/ads/mnads-ads-home-after-menu.php';
        include get_template_directory() . '/ads/mnads-ads-home-row-one.php';
        include get_template_directory() . '/ads/mnads-ads-floating-bottom.php';
    } elseif (is_single() && !has_category('journal')) {
        include get_template_directory() . '/ads/mnads-ads-after-content.php';
    } elseif (is_single() && has_category('journal')) {
        include get_template_directory() . '/ads/mnads-ads-after-content.php';
        include get_template_directory() . '/ads/mnads-ads-floating-bottom.php';
    } elseif (is_page()) {
        include get_template_directory() . '/ads/mnads-ads-floating-bottom.php';
    } elseif (is_category()) {
        include get_template_directory() . '/ads/mnads-ads-floating-bottom.php';
    } elseif (is_tag()) {
        include get_template_directory() . '/ads/mnads-ads-floating-bottom.php';
    }
}

add_action('wp', 'mnads_loader');
