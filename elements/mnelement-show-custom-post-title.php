<?php
defined('ABSPATH') || exit;

/**
 * Custom Post Title
 * Title + Nama Perusahaan
*/

function mnel_show_custom_post_title() {
    if (is_single() && ! has_category('journal')) {
        $wpTitle = get_the_title();
        $authorID = get_post_field('post_author', mncore_postID());
        $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
        $customPostTitle = $wpTitle . ' - ' . $namaPerusahaan;
        return $customPostTitle;

    } elseif (is_single() && has_category('journal')) {
        $title = get_the_title();
        return $title;

    }elseif (is_tag()) {

    } elseif (is_category()) {

    }
}