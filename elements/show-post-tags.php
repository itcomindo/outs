<?php
defined('ABSPATH') || exit;

/**
 * show post tags
 */
function mnel_show_post_tags()
{
    $postID = mncore_postID();
    $tags = get_the_tags($postID);
    if ($tags) {
?>
        <div class="globalTagWr">
            <?php
            foreach ($tags as $tag) {
            ?>
                <ul class="globalTagList">
                    <?php
                    $tagID = $tag->term_id;
                    $tagName = $tag->name;
                    $tagLink = get_tag_link($tagID);
                    echo '<li><a title="' . $tagName . '" class="globalTagLink"  href="' . $tagLink . ' ">#' . $tagName . '</a></li>';
                    ?>
                </ul>
            <?php
            }
            ?>
        </div>
<?php
    }
}
