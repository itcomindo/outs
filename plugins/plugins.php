<?php
defined('ABSPATH') || exit;

include get_template_directory() . '/plugins/seo.php';
include get_template_directory() . '/plugins/image-converter-to-webp.php';
include get_template_directory() . '/plugins/auto-create-folder-for-user.php';

/**
 * Plugin Loader
 * Conditional Plugin Loader
 */
function mnplugin_conditional_plugin_loader() {
    if (is_single() && ! has_category('journal')) {
        include get_template_directory() . '/plugins/single-post-schema.php';
    } elseif (is_tag() && ! has_category('journal')) {
        include get_template_directory() . '/plugins/tag-schema.php';
    }
}
add_action('wp', 'mnplugin_conditional_plugin_loader');