<?php
defined('ABSPATH') || exit;
/**
 * Remove Website Field in Comment Form
 */
function remove_website_field_in_comment_form() {
    $option = carbon_get_theme_option('remove_website_field_from_comment_form_mn');
    if ($option) {
        // Remove Website Field in Comment Form in single post
        function remove_website_field_in_comment_form_single_post($fields) {
            unset($fields['url']);
            return $fields;
        }
        add_filter('comment_form_default_fields', 'remove_website_field_in_comment_form_single_post');
    } else {
        return;
    }
}
add_action('init', 'remove_website_field_in_comment_form');