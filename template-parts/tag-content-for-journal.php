<?php
defined('ABSPATH') || exit;

function mntp_show_content_for_journal()
{
?>
    <div class="tagHeadWr">
        <?php
        // echo tag name
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        $tagName = $tag->name;
        // remove Dunia from tag name
        $tagName = str_replace('Dunia', '', $tagName);
        echo '<h1 class="globalSectionHead">' . $tagName . '</h1>';
        echo '<p class="globalSectionDescription">Artikel terkait dengan tag ' . $tagName . '</p>';
        ?>
    </div>
    <div class="singleWr">
        <?php
        echo mnquery_show_post_based_on_tag();
        ?>
    </div>
<?php
}
