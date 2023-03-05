<?php
defined('ABSPATH') || exit;

function mncore_get_active_user()
{
    $postID = mncore_postID();
    $authorID = get_post_field('post_author', $postID);
    $status = carbon_get_user_meta($authorID, 'is_active_user');
    if ($status == true) {
        $class = 'active';
    } else {
        $class = 'hide invisible';
    }
    return $class;

}
