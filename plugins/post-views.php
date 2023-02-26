<?php
defined('ABSPATH') || exit;


function page_views_mn()
{
    // global $post;
    // $postID = $post->ID;
    $postID = mn_postID();
    if (!empty($postID)) {
        $count_key = 'page_views_mn';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
}
add_action('wp_head', 'page_views_mn');



/**
 * !Get and !Show post views count
 * @param string $class
 * Since Alpha 1.0.0
 */

/*================== Get Post Views ==================*/
function get_page_views_mn($postID)
{
    // global $post;
    $count_key = 'page_views_mn';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

/*================== Show Post Views ==================*/
function mn_show_post_views($class = 'globalPostViewCount')
{
    // global $post;
    $post_views = get_page_views_mn(get_the_ID());
    if ($post_views > 0) { ?>
    <?php
        echo '<div class="' . $class . '">';
        echo  $post_views . ' Views ';
        echo '</div>';
    } else {
        // do nothing
    }
}
