<?php
defined('ABSPATH') || exit;
/**
 * Show featured image
*/
function mnel_show_featured_image()
{
    $postID = mncore_postID();
    if (has_post_thumbnail($postID)) {
        $attr = array(
            'class' => 'globalPostFeaturedImage',
            'alt' => get_the_title($postID),
            'title' => get_the_title($postID),
            'src' => get_the_post_thumbnail_url($postID, 'full'),
        );
        $postFeaturedImage = get_the_post_thumbnail($postID, 'full', $attr);
        return $postFeaturedImage;
    } else {
        $fallback = mn_show_fallback_featured_image();
        $postFeaturedImage = '<div class="globalPostFeaturedImage"><img title="'. get_the_title() .'" alt="'. get_the_title() .'" src="' . $fallback . '"></div>';
        return $postFeaturedImage;
    }
}