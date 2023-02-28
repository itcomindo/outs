<?php
defined('ABSPATH') || exit;
/**
 * get author ID
 */
function mncore_authorID()
{
    if (is_single()) {
        $postID = mncore_postID();
        $authorID = get_post_field('post_author', $postID);
    } elseif (is_author()) {
        $authorID = get_the_author_meta('ID');
    }
    return $authorID;
}
