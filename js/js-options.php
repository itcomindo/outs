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

    // load flickity in home page
    if (is_home()) {
        // load flickity from cdn
        wp_enqueue_script('flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jq'), '2.2.2', true);
        // if flickity is not available from CDN
        if (!wp_script_is('flickity-js', 'enqueued')) {
            // load flickity from folder libs
            wp_enqueue_script('flickity-js', get_template_directory_uri() . '/libs/flickity.pkgd.min.js', array('jq'), '2.2.2', true);
        }
        // load home.js
        wp_enqueue_script('home-js', get_template_directory_uri() . '/js/home.js', array('flickity-js'), $version, true);
    } elseif (is_single() || is_tag()) {
        //!wait to fixed in live
        // wp_enqueue_script('single-js', get_template_directory_uri() . '/js/single.js', array('jq'), $version, true);
    }

}
add_action('wp_enqueue_scripts', 'load_mm_js', 3);

// admin js
function load_admin_js() {
    // if current page is /admin.php?page=crb_carbon_fields_container_api_tracking_setting.php
    if (isset($_GET['page']) && $_GET['page'] == 'crb_carbon_fields_container_api_tracking_setting.php') {
        // load admin js
        wp_enqueue_script('admin-js', get_template_directory_uri() . '/js/admin-options.js', array('jquery'), $version, true);
    }
}
add_action('admin_enqueue_scripts', 'load_admin_js');


