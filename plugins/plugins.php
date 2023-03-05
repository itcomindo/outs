<?php
defined('ABSPATH') || exit;

include get_template_directory() . '/plugins/mnplugin-seo.php';
include get_template_directory() . '/plugins/mnplugin-image-converter-to-webp.php';
include get_template_directory() . '/plugins/mnplugin-auto-create-folder-for-user.php';
include get_template_directory() . '/plugins/mnplugin-nama-nama-kota.php';
include get_template_directory() . '/plugins/mnplugin-kodepos-data.php';
include get_template_directory() . '/plugins/mnplugin-sitemap.php';

/**
 * Plugin Loader
 * Conditional Plugin Loader
 */
function mnplugin_conditional_plugin_loader() {
    if (is_single() && ! has_category('journal')) {
        include get_template_directory() . '/plugins/mnplugin-single-post-schema.php';
    } elseif (is_tag() && ! has_category('journal')) {
        include get_template_directory() . '/plugins/mnplugin-tag-schema.php';
    }
}
add_action('wp', 'mnplugin_conditional_plugin_loader');