<?php
defined('ABSPATH') || exit;

function mncore_show_alamat_local_business()
{
    if (is_single()) {
        $alamat = get_field('lbalamat');
        return $alamat;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $alamat = get_field('lbalamat', $postID);
        return $alamat;
    }
}