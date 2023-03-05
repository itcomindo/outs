<?php
defined('ABSPATH') || exit;

include_once get_template_directory() . '/queries/mnquery-basic-query.php';
include_once get_template_directory() . '/queries/mnquery-global-query.php';
include_once get_template_directory() . '/queries/mnquery-sticky-post-query.php';
include_once get_template_directory() . '/queries/mnquery-home-content-column-query.php';
include_once get_template_directory() . '/queries/mnquery-post-by-tag-query.php';

function mnqu_queries_loader() {
    if (is_home()) {
        include get_template_directory() . '/queries/mnquery-post-from-author-query.php';
    }
}
add_action('wp', 'mnqu_queries_loader');