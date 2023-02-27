<?php
defined('ABSPATH') || exit;
/**
 * Show comments count
*/
function mnel_show_comments_count()
{
    $postID = mncore_postID();
    $comments_count = get_comments_number($postID);
    // if post comment enabled
    if (comments_open($postID)) {
        if ($comments_count == 0) {
            $comments_count = __('No Comments', 'mn');
        } elseif ($comments_count > 1) {
            $comments_count = $comments_count . __(' Comments', 'mn');
        } else {
            $comments_count = $comments_count . __(' Comment', 'mn');
        }
    } else {
        $comments_count = __('Comments are closed', 'mn');
    }
    $comments_count = '<div class="globalPostCommentsCountWr"><span class="globalPostCommentsCount">' . $comments_count . '</span></div>';
    return $comments_count;
}