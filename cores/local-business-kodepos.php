<?php
defined('ABSPATH') || exit;

function mncore_local_business_kodepos()
{
    if (is_single()) {
        $kodepos = carbon_get_post_meta(mncore_postID(), 'lbkodepos');
        return $kodepos;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $kodepos = carbon_get_post_meta($postID, 'lbkodepos');
        return $kodepos;
    }
}