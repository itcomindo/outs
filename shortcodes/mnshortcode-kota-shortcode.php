<?php
defined('ABSPATH') || exit;

function mnshortcode_show_kota()
{
    if (is_single()) {
        $kota = get_field('lbkota');
        // if kota is empty, get kota from post meta
        if (empty($kota)) {
            $kota = the_kota();
            return $kota;
        } else {
           $kota = $kota; 
           return $kota;
        }
    } elseif (is_tag()) {
        $tagID = get_queried_object_id();
        $postID = get_posts([
            'tag_id' => $tagID,
            'numberposts' => 1,
            'post_type' => 'post',
            'post_status' => 'publish',
        ]);
        $postID = $postID[0]->ID;
        // $kota = carbon_get_post_meta($postID, 'lbkota');
        $kota = get_field('lbkota', $postID);
        $kota = the_kota();
        return $kota;
    }
}

add_shortcode('kota', 'mnshortcode_show_kota');
