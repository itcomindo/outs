<?php
defined('ABSPATH') || exit;
/**
 * Show featured image
*/
function mn_show_featured_image()
{
    $postID = mn_postID();
    // check if the post has a Post Thumbnail assigned to it or not
    if (has_post_thumbnail($postID)) {
        $attr = array(
            'class' => 'globalPostFeaturedImage',
            'alt' => get_the_title($postID),
            'title' => get_the_title($postID),
            'src' => get_the_post_thumbnail_url($postID, 'full'),
        );
        $postFeaturedImage = get_the_post_thumbnail($postID, 'full', $attr);
        $postFeaturedImage = '<div class="globalPostFeaturedImage">' . $postFeaturedImage . '</div>' . mn_show_unsplash_author();
        return $postFeaturedImage;
    } else {
        $fallback = mn_show_fallback_featured_image();
        $postFeaturedImage = '<div class="globalPostFeaturedImage"><img title="'. get_the_title() .'" alt="'. get_the_title() .'" src="' . $fallback . '"></div>';
        return $postFeaturedImage;
    }
}