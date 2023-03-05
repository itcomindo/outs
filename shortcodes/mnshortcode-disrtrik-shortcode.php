<?php
defined('ABSPATH') || exit;


function mnshortcode_show_distrik()
{
    if (is_single()) {
        // $distrik = carbon_get_post_meta(mncore_postID(), 'lbdistrik');
        $distrik = get_field('lbdistrik');
        return $distrik;
    } elseif (is_tag()) {
        $tagID = get_queried_object_id();
        $postID = get_posts([
            'tag_id' => $tagID,
            'numberposts' => 1,
            'post_type' => 'post',
            'post_status' => 'publish',
        ]);
        $postID = $postID[0]->ID;
        // $distrik = carbon_get_post_meta($postID, 'lbdistrik');
        $distrik = get_field('lbdistrik', $postID);
        return $distrik;
    }
}

add_shortcode('distrik', 'mnshortcode_show_distrik');