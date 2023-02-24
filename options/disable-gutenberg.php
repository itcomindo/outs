<?php
defined('ABSPATH') || exit;
function guttn() {
    $gutn = carbon_get_theme_option('disable_gutenburg_mn');
    if ($gutn) {
        add_filter('use_block_editor_for_post', '__return_false', 10);
        add_filter('use_block_editor_for_post_type', '__return_false', 10);
    }
}
add_action('init', 'guttn');