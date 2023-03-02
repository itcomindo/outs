<?php
defined('ABSPATH') || exit;

function mnoption_show_ads_inline_in_article() {
    $option = carbon_get_theme_option('enable_ads_inline_shortcode_in_article_option');
    if ($options == true) {
        echo mnads_show_ads_inline_in_aricle();
    }
}
add_shortcode('ads', 'mnoption_show_ads_inline_in_article');