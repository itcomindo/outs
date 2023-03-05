<?php
defined('ABSPATH') || exit;

include_once get_template_directory() . '/queries/basic-query.php';
include_once get_template_directory() . '/queries/global-query.php';
include_once get_template_directory() . '/queries/sticky-post-query.php';
include_once get_template_directory() . '/queries/home-content-column-query.php';
include_once get_template_directory() . '/queries/tag-query.php';

function mnqu_queries_loader() {
    if (is_home()) {
        include get_template_directory() . '/queries/post-from-author-query.php';
    }
}
add_action('wp', 'mnqu_queries_loader');