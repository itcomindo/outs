<?php
defined('ABSPATH') || exit;

/**
 * show post tags
 * @param string $wrap the wrapper class
 * @param string $class the list class
 */
function mnel_show_post_tags($wrap = 'globalTagWr', $class = 'globalTagList')
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
        <div class="<?php echo $wrap ?>">
            <ul class="<?php echo $class; ?>">
            <?php
            foreach ($tags as $tag) {
            ?>
                    <?php
                    $tagID = $tag->term_id;
                    $tagName = $tag->name;
                    // if $tagNAme contain Dunia , replace with nothing and replace space with nothing
                    $tagName = str_replace('Dunia', '', $tagName);
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
