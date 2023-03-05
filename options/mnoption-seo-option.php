<?php
defined('ABSPATH') || exit;

function enabling_builtin_seo_options_mn()
{
    $option = carbon_get_theme_option('enabling_builtin_seo_options_mn');
    if ($option == true) {
        mnplugin_seo_fields();
    }
}
add_action('carbon_fields_register_fields', 'enabling_builtin_seo_options_mn');

function display_builtin_seo_plugin_mn()
{
    $option = carbon_get_theme_option('enabling_builtin_seo_options_mn');
    if ($option == true) {
        mnplug_seo();
    }
}
// add_action('wp_head', 'display_builtin_seo_plugin_mn', 1);