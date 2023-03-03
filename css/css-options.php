<?php
defined('ABSPATH') || exit;

function load_mm_css()
{
    // load local css Version
    $version = wp_get_theme()->get('Version');

    // Load normalize.css
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');
    // fallback normalize.css if CDN is not available
    if (!wp_style_is('normalize', 'enqueued')) {
        wp_enqueue_style('normalize', get_template_directory_uri() . '/libs/normalize.css', array(), '8.0.1', 'all');
    }

    // enqueue animate.css from cdnjs
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
    // fallback animate.css if CDN is not available
    if (!wp_style_is('animate-css', 'enqueued')) {
        wp_enqueue_style('animate-css', get_template_directory_uri() . '/libs/animate.min.css', array(), '4.1.1', 'all');
    }

    // enqueue fontawesome from cdnjs
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all');
    // fallback fontawesome.css if CDN is not available
    if (!wp_style_is('fontawesome-css', 'enqueued')) {
        wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/libs/all.min.css', array(), '6.2.0', 'all');
    }

    // load internal css
    wp_enqueue_style('style', get_stylesheet_uri());


    // conditional load css
    if (is_home() || is_tag() && has_category('journal')) {
        wp_enqueue_style('home-css', get_template_directory_uri() . '/css/home.css', array(), $version, 'all');
        wp_enqueue_style('home-media-css', get_template_directory_uri() . '/css/home-media.css', array('home-css'), $version, 'all');

        // load flickity css from cdnjs
        wp_enqueue_style('flickity-css', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css', array(), '2.2.2', 'all');
        // fallback flickity.css if CDN is not available
        if (!wp_style_is('flickity-css', 'enqueued')) {
            wp_enqueue_style('flickity-css', get_template_directory_uri() . '/libs/flickity.min.css', array(), '2.2.2', 'all');
        }
    }
    if (is_single() || is_tag() && !has_category('journal')) {
        wp_enqueue_style('single-css', get_template_directory_uri() . '/css/single.css', array(), $version, 'all');
        wp_enqueue_style('single-media-css', get_template_directory_uri() . '/css/single-media.css', array('single-css'), $version, 'all');
    } elseif (is_page()) {
        wp_enqueue_style('page-css', get_template_directory_uri() . '/css/page.css', array(), $version, 'all');
        wp_enqueue_style('page-media-css', get_template_directory_uri() . '/css/page-media.css', array('page-css'), $version, 'all');
    }elseif (is_author()) {
        wp_enqueue_style('author-css', get_template_directory_uri() . '/css/author.css', array(), $version, 'all');
        wp_enqueue_style('author-media-css', get_template_directory_uri() . '/css/author-media.css', array('author-css'), $version, 'all');
    } elseif (is_search()) {
        wp_enqueue_style('not-found-css', get_template_directory_uri() . '/css/not-found.css', array(), $version, 'all');
        wp_enqueue_style('not-found-media-css', get_template_directory_uri() . '/css/not-found-media.css', array('not-found-css'), $version, 'all');
    } elseif (is_404()) {
        wp_enqueue_style('search-css', get_template_directory_uri() . '/css/search.css', array(), $version, 'all');
        wp_enqueue_style('search-media-css', get_template_directory_uri() . '/css/search-media.css', array('search-css'), $version, 'all');
    } elseif (is_category()) {
        wp_enqueue_style('category-css', get_template_directory_uri() . '/css/category.css', array(), $version, 'all');
        wp_enqueue_style('category-media-css', get_template_directory_uri() . '/css/category-media.css', array('category-css'), $version, 'all');
    } elseif (is_tag()) {
        wp_enqueue_style('tag-css', get_template_directory_uri() . '/css/tag.css', array(), $version, 'all');
        wp_enqueue_style('tag-media-css', get_template_directory_uri() . '/css/tag-media.css', array('tag-css'), $version, 'all');
    } else {
        // wait
    }
    
    // temporary CSS
    wp_enqueue_style('chatbox-css', get_template_directory_uri() . '/css/chatbox.css', array(), $version, 'all');
    wp_enqueue_style('topbar-css', get_template_directory_uri() . '/css/topbar.css', array(), $version, 'all');
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css', array(), $version, 'all');
    wp_enqueue_style('header-menu-css', get_template_directory_uri() . '/css/header-menu.css', array(), $version, 'all');
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css', array(), $version, 'all');
    wp_enqueue_style('ads-css', get_template_directory_uri() . '/css/ads.css', array(), $version, 'all');
    
    
    // load global media css
    wp_enqueue_style('global-media-css', get_template_directory_uri() . '/css/global-media.css', array(), $version, 'all');
    wp_enqueue_style('darkmode', get_template_directory_uri() . '/css/darkmode.css', array(), 'v1.0', 'all');
    
}
add_action('wp_enqueue_scripts', 'load_mm_css');


function admin_css_mn() {
    wp_enqueue_style('admin-css', get_template_directory_uri() . '/css/admin.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'admin_css_mn');
// add_action('login_enqueue_scripts', 'admin_css_mn');