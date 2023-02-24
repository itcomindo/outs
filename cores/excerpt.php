<?php
defined('ABSPATH') || exit;

function mn_excerpt() {
    if (is_single()) {
        // get excerpt
        $excerpt = strlen(get_the_excerpt());
        if ($excerpt <= 1) {
            $title = get_the_title();
            $excerpt = $title . ' ' . get_bloginfo('description');
        } elseif ($excerpt > 160) {
            $excerpt = substr(get_the_excerpt(), 0, 160) . '...';
        } else {
            $excerpt = get_the_excerpt();
        }
    } elseif (is_page()) {
        $excerpt = strlen(get_the_excerpt());
        if ($excerpt <= 1) {
            $title = get_the_title();
            $excerpt = $title . ' ' . get_bloginfo('description');
        } elseif ($excerpt > 160) {
            $excerpt = substr(get_the_excerpt(), 0, 160) . '...';
        } else {
            $excerpt = get_the_excerpt();
        }
    } 
    return $excerpt;
}