<?php
defined('ABSPATH') || exit;

function mnshortcode_nama_perusahaan() {
    if (is_single()) {

        $authorID = mncore_authorID();
        $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
        return $namaPerusahaan;
        
    } elseif (is_tag()) {
        $tagID = mncore_tagID();
        $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
        return $namaPerusahaan;
        // get postID from tagID
        /*
        $postID = get_posts([
            'tag_id' => $tagID,
            'numberposts' => 1,
            'post_type' => 'post',
            'post_status' => 'publish',
        ]);
        $postID = $postID[0]->ID;
        */
    }
}
add_shortcode('perusahaan', 'mnshortcode_nama_perusahaan');