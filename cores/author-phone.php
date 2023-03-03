<?php
defined('ABSPATH') || exit;

function mncore_show_user_phone() {
    if (is_single()) {
        $authorID = mncore_authorID();
        $phone = carbon_get_user_meta($authorID, 'phone_number_user');
        return $phone;

    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $authorID = get_post_field('post_author', $postID);
        $phone = carbon_get_user_meta($authorID, 'phone_number_user');
        return $phone;

    }
}