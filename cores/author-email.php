<?php
defined('ABSPATH') || exit;

function mncore_show_author_email() {
    if (is_single()) {
        $authorID = mncore_authorID();
        $email = carbon_get_user_meta($authorID, 'email_perusahaan_user');
        return $email;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $authorID = get_post_field('post_author', $postID);
        $email = carbon_get_user_meta($authorID, 'email_perusahaan_user');
        return $email;
    }
}