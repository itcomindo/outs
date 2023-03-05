<?php
defined('ABSPATH') || exit;

/*
 * Get pageID from page
*/
function mncore_catID()
{
    if (is_single()) {
        $postID = mncore_postID();
        $categories = get_the_category($postID);
        $catID = $categories[0]->term_id;
        return $catID;
    } else {
        $catID = get_queried_object_id();
        return $catID;
    }
}