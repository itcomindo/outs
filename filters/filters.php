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
 * remove tag <p></p> that wrap around image
*/
function remove_img_p_tags($content)
{
    // Remove <p> tags that wrap <img> tags
    $content = preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/', '\2', $content);
    return $content;
}
add_filter('the_content', 'remove_img_p_tags');

