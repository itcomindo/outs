<?php
defined('ABSPATH') || exit;

/*
 * Get pageID from page
*/
function mn_catID()
{
    if (is_single()) {
        $postID = mn_postID();
        $categories = get_the_category($postID);
        $catID = $categories[0]->term_id;
        return $catID;
    } else {
        $catID = get_queried_object_id();
        return $catID;
    }
}