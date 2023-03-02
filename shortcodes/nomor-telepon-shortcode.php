<?php
defined('ABSPATH') || exit;


function mnshortcode_nomor_telepon() {
    if (is_single()) {

        $authorID = mncore_authorID();
        $namaPerusahaan = carbon_get_user_meta($authorID, 'phone_number_user');
        return $namaPerusahaan;

    } elseif (is_tag()) {
        $tagID = get_queried_object_id();
        $postID = get_posts([
            'tag_id' => $tagID,
            'numberposts' => 1,
            'post_type' => 'post',
            'post_status' => 'publish',
        ]);
        $postID = $postID[0]->ID;
        $authorID = get_post_field('post_author', $postID);
        $namaPerusahaan = carbon_get_user_meta($authorID, 'phone_number_user');
        return $namaPerusahaan;
    }
}

add_shortcode('phone', 'mnshortcode_nomor_telepon');