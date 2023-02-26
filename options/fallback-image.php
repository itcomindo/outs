<?php
defined('ABSPATH') || exit;

/**
 * Fallback Featured Image Options
 */
function mn_show_fallback_featured_image() {
    $option = carbon_get_theme_option('enable_disable_fallback_featured_image_mn');
    if ($option == true) {
        $featuredImage = carbon_get_theme_option('fallback_featured_image_mn');
        return $featuredImage;
    } else {
        $featuredImage = get_template_directory_uri() . '/images/noimage.webp';
        return $featuredImage;
    }
}