<?php
defined('ABSPATH') || exit;

function mnshortcode_show_provinsi() {
    if (is_single()) {
        $catName = get_cat_name(mncore_catID());
        return $catName;
    } elseif (is_tag()) {
        $catName = 'wait';
        return $catName;
    }
}

add_shortcode('provinsi', 'mnshortcode_show_provinsi');