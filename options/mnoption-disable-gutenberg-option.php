<?php
defined('ABSPATH') || exit;
function disable_gutenberg_options_mn() {
    $gutn = carbon_get_theme_option('disable_gutenburg_mn');
    if ($gutn) {
        add_filter('use_block_editor_for_post', '__return_false', 10);
        add_filter('use_block_editor_for_post_type', '__return_false', 10);
    }
}
add_action('init', 'disable_gutenberg_options_mn');