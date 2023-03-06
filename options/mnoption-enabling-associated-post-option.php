<?php
defined('ABSPATH') || exit;

function mnfields_enabling_association_posts()
{
    $option = carbon_get_theme_option('enable_disable_associated_post_mn');
    if ($option == true) {
        association_post_fields_mn();
    }
}
add_action('carbon_fields_register_fields', 'mnfields_enabling_association_posts');


