<?php
defined('ABSPATH') || exit;

/**
 * Show Post Author
 * Get postID from single, page, tag, author
 * @param $link - link to author page or not (true/false) default is true
 */
function mnel_show_post_author($link)
{
?>
    <div class="globalPostAuthorWr">
        <?php
        $postID = mncore_postID();
        $authorID = get_post_field('post_author', $postID);
        if ($link) {
            $authorLink = get_author_posts_url($authorID);
            $authorName = get_the_author_meta('display_name', $authorID);
            echo '<a href="' . $authorLink . '" class="globalAuthorLink">' . $authorName . '</a>';
        } else {
            $authorName = get_the_author_meta('display_name', $authorID);
            echo '<span class="globalAuthorName">' . $authorName . '</span>';
        }
        ?>
    </div>
<?php

}
