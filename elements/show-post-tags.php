<?php
defined('ABSPATH') || exit;

/**
 * show post tags
 */
function mnel_show_post_tags()
{
    $postID = mncore_postID();
    $tags = get_the_tags($postID);
    // count tags
    $countTags = count($tags);
    // if tags > 6, show only 6 tags
    if ($countTags > 6) {
        $tags = array_slice($tags, 0, 6);
    }
    if ($tags) {
?>
        <div class="globalTagWr">
            <ul class="globalTagList">
            <?php
            foreach ($tags as $tag) {
            ?>
                    <?php
                    $tagID = $tag->term_id;
                    $tagName = $tag->name;
                    $tagLink = get_tag_link($tagID);
                    echo '<li><a title="' . $tagName . '" class="globalTagLink"  href="' . $tagLink . ' ">#' . $tagName . '</a></li>';
                    ?>
            <?php
            }
            ?>
            </ul>
        </div>
<?php
    }
}
