<?php
defined('ABSPATH') || exit;

function mncore_get_post_id_in_tag() {
    if (is_tag()) {
        // get tagID
        $tagID = mncore_tagID();
        // get postID related to tagID
        $postID = array(
            'post_type' => 'post',
            'tag_id' => $tagID,
            'posts_per_page' => 1,
        );
        $postID = get_posts($postID);
        $postID = $postID[0]->ID;
        return $postID;
    }
}