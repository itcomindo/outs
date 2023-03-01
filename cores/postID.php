<?php
defined('ABSPATH') || exit;
/**
 * Get post ID from single, page, tag, author
 * return postID
 */
function mncore_postID()
{
    if (is_single()) {
        $postID = get_the_ID();
    } elseif (is_tag()) {
        mncore_get_post_id_in_tag();
    } elseif (is_page()) {
        $postID = get_the_ID();
    } elseif (is_author()) {
        $authorID = mncore_authorID();
        $postID = get_posts(array('author' => $authorID));
    }
    return $postID;
}