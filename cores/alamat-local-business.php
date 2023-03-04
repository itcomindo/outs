<?php
defined('ABSPATH') || exit;

function mncore_show_alamat_local_business()
{
    if (is_single()) {
        $postID = get_the_ID();
        $alamat = get_field('lbalamat');
        if (empty($alamat)) {
            $alamat = 'Jln. ' . the_kota() . ' No. ' . $postID;
            return $alamat;
        } else {
            $alamat = $alamat;
            return $alamat;
        }
        return $alamat;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $alamat = get_field('lbalamat', $postID);
        if (empty($alamat)) {
            $alamat = 'Jln. ' . the_kota() . ' No. ' . $postID;
            return $alamat;
        } else {
            $alamat = $alamat;
            return $alamat;
        }
        return $alamat;
    }
}