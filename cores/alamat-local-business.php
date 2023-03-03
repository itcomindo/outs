<?php
defined('ABSPATH') || exit;

function mncore_show_alamat_local_business()
{
    if (is_single()) {
        $alamat = carbon_get_post_meta(mncore_postID(), 'lbalamat');
        return $alamat;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $alamat = carbon_get_post_meta($postID, 'lbalamat');
        return $alamat;
    }
}