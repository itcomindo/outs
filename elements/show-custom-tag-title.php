<?php
defined('ABSPATH') || exit;

function mnel_show_custom_tag_title() {
    $tagID = get_queried_object_id();
    $tagTitle = get_term($tagID)->name;
    $postID = mncore_get_post_id_in_tag();
    $authorID = get_post_field('post_author', $postID);
    $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
    $customTagTitle = $tagTitle . ' - ' . $namaPerusahaan;
    return $customTagTitle;

}