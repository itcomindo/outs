<?php
defined('ABSPATH') || exit;

/**
 * Show post category
*/

function mn_show_post_category()
{
    $post_id = mn_postID();
    $category = get_the_category($post_id);
    if (!empty($category)) {
        $category_name = $category[0]->name;
        $postCategory = '<div class="globalPostCategoryWr"><a title=" ' . $category_name . '" href="' . get_category_link($category[0]->term_id) . '" class="globalPostCategory">' . $category_name . '</a></div>';
        return $postCategory;
    }

}

