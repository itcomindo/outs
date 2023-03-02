<?php
defined('ABSPATH') || exit;

// remove type attribute from style tag
add_filter('style_loader_tag', function ($tag, $handle) {
    return str_replace("type='text/css'", '', $tag);
}, 10, 2);


// remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// remove generator meta tag
remove_action('wp_head', 'wp_generator');
// remove wlwmanifest link
remove_action('wp_head', 'wlwmanifest_link');
// remove rsd link
remove_action('wp_head', 'rsd_link');
// remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');

// remove type attribute from script tag
add_filter('script_loader_tag', function ($tag, $handle) {
    return str_replace("type='text/javascript'", '', $tag);
}, 10, 2);



/**
 * Function to filter: disable or remove revisions metabox in post and page edit screen
*/
function mn_remove_revisions_metabox()
{
    remove_meta_box('revisionsdiv', 'post', 'normal');
    remove_meta_box('revisionsdiv', 'page', 'normal');
}
add_action('admin_menu', 'mn_remove_revisions_metabox');

/**
 * remove slug metabox
*/
function mn_remove_slug_metabox()
{
    remove_meta_box('slugdiv', 'post', 'normal');
    remove_meta_box('slugdiv', 'page', 'normal');
}
add_action('admin_menu', 'mn_remove_slug_metabox');