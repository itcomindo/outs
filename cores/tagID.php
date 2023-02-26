<?php
defined('ABSPATH') || exit;
/**
 * Get tagID from tag
 */
function mn_tagID()
{
    if (is_single()) {
        $postID = mn_postID();
        $tags = get_the_tags($postID);
        $tagID = $tags[0]->term_id;
        return $tagID;
    } else {
        $tagID = get_queried_object_id();
        return $tagID;
    }
}
