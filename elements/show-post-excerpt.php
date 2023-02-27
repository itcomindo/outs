<?php
defined('ABSPATH') || exit;
/**
 * function to create post excerpt with conditinal
 * characters limit, source etc
 */
function mnel_show_post_excerpt($limit = 25, $class='globalReadmore') {
    $postID = mncore_postID();
    $excerpt = get_the_excerpt($postID);
    $title = get_the_title($postID);
    // count the number of characters in the string
    $excerpt_length = strlen($excerpt);
    // if the number of characters is less than the limit
    if ($excerpt_length <= $limit) {
        $excerpt = $excerpt;
        return '<p class="globalExcerpt">' . $excerpt . '</p>';
    } elseif ($excerpt_length > $limit) {
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = esc_html($excerpt);
        $excerpt = $excerpt . '...';
        return '<p class="globalExcerpt">' . $excerpt . '</p>';
    } else {
        $excerpt = esc_html($excerpt);
        $excerpt = $excerpt;
        return '<p class="globalExcerpt">' . $excerpt . '</p>';
    }


}