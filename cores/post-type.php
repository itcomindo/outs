<?php
defined('ABSPATH') || exit;

function mncore_if_is_journal() {
    $postCat = mncore_catID();
    $postCatName = get_cat_name($postCat);
    if ($postCatName == "journal") {
        $posType = true;
    } else {
        $posType = false;
    }
    return $posType;
}