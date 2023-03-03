<?php
defined('ABSPATH') || exit;

function mnshortcode_show_provinsi() {
    if (is_single()) {
        $catName = get_cat_name(mncore_catID());
        return $catName;
    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $catID = get_the_category($postID);
        return $catID[0]->name;
    }
}

add_shortcode('provinsi', 'mnshortcode_show_provinsi');