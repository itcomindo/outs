<?php
defined('ABSPATH') || exit;

include get_template_directory() . '/elements/mnelement-show-post-tags.php';
include get_template_directory() . '/elements/mnelement-show-post-author.php';
include get_template_directory() . '/elements/mnelement-show-post-date.php';
include get_template_directory() . '/elements/mnelement-show-post-category.php';
include get_template_directory() . '/elements/mnelement-show-comments-count.php';
include get_template_directory() . '/elements/mnelement-show-featured-image.php';
include get_template_directory() . '/elements/mnelement-show-post-excerpt.php';
include get_template_directory() . '/elements/mnelement-show-read-more-button.php';
include get_template_directory() . '/elements/mnelement-show-unsplash-author.php';
include get_template_directory() . '/elements/mnelement-show-sidebar-head.php';
include get_template_directory() . '/elements/mnelement-show-post-views.php';
include get_template_directory() . '/elements/mnelement-show-login-button.php';
include get_template_directory() . '/elements/mnelement-show-logout-button.php';
include get_template_directory() . '/elements/mnelement-show-five-stars.php';
include get_template_directory() . '/elements/mnelement-show-icons.php';
include get_template_directory() . '/elements/mnelement-show-nama-perusahaan.php';
include get_template_directory() . '/elements/mnelement-show-logo-perusahaan.php';
include get_template_directory() . '/elements/mnelement-show-user-cta.php';
include get_template_directory() . '/elements/mnelement-show-chatbox.php';
include get_template_directory() . '/elements/mnelement-custom-content-in-tag.php';
include get_template_directory() . '/elements/mnelement-show-custom-post-title.php';
include get_template_directory() . '/elements/mnelement-show-custom-tag-title.php';

function mnel_conditional_element_loader() {
    if (is_single() && ! has_category('journal')) {
        include get_template_directory() . '/elements/mnelement-show-mobile-floating-buttons.php';
        include get_template_directory() . '/elements/mnelement-show-mobile-floating-cta.php';
        include get_template_directory() . '/elements/mnelement-show-mobile-floating-share.php';
        
    } elseif (is_single() && has_category('journal')) {
        include get_template_directory() . '/elements/mnelement-show-mobile-floating-buttons.php';
        include get_template_directory() . '/elements/mnelement-show-mobile-floating-share.php';
    }
}

add_action('wp', 'mnel_conditional_element_loader');



// next element will release soon
/*
include get_template_directory() . '/elements/show-chatbox.php';
include get_template_directory() . '/elements/show-search-form.php';

*/
