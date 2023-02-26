<?php
defined('ABSPATH') || exit;
/**
 * Show post date
*/
function mn_show_post_date()
{
    $postID = mn_postID();
    $postDate = get_the_date('d F Y', $postID);
    $postDate = "<span class='postDate'>$postDate</span>";
    return $postDate;
}