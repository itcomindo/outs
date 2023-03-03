<?php
defined('ABSPATH') || exit;

function mnshortcode_show_kota()
{
    if (is_single()) {
        $kota = carbon_get_post_meta(mncore_postID(), 'lbkota');
        return $kota;
    } elseif (is_tag()) {
        $tagID = get_queried_object_id();
        $postID = get_posts([
            'tag_id' => $tagID,
            'numberposts' => 1,
            'post_type' => 'post',
            'post_status' => 'publish',
        ]);
        $postID = $postID[0]->ID;
        $kota = carbon_get_post_meta($postID, 'lbkota');
        return $kota;
    }
}

add_shortcode('kota', 'mnshortcode_show_kota');