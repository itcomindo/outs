<?php
defined('ABSPATH') || exit;
function load_mm_js()
{
    // enqueue webfont.js from CDN
    wp_enqueue_script('webfont-js', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), '1.6.26', true);

    // load jquery from Google Host CDN latest version
    wp_enqueue_script("jq", "https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js", array(), "3.6.1", true);

    // fallback webfont-js if CDN is not available
    if (!wp_script_is('webfont-js', 'enqueued')) {
        wp_enqueue_script("webfont-js", get_template_directory_uri() . "/libs/webfont.js", array(), "1.6.26", true);
    }

    // fallback jquery if CDN is not available
    if (!wp_script_is('jq', 'enqueued')) {
        wp_enqueue_script("jq", get_template_directory_uri() . "/libs/jquery.min.js", array(), "3.6.1", true);
    }
    // load global js from folder js
    wp_enqueue_script('global-js', get_template_directory_uri() . '/js/global.js', array('jq'), $version, true);
    // load darkmode
    wp_enqueue_script('darkmode-js', get_template_directory_uri() . '/js/darkmode.js', array('jq'), $version, true);

}
add_action('wp_enqueue_scripts', 'load_mm_js', 3);




