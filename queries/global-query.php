<?php
defined('ABSPATH') || exit;

/**
 * Show global query
 * @param string $by tag or category 
 * @param int $postPerPage show how many posts
 * @param string $parentClass the parent class
 * @param string $headTitle the title of the query
 * @param string $wrapperClass the items wrapper class
 * @param string $itemClass the item class
 * @param string $layout the layout of the query card or list
 */

function mnqu_show_global_query($by = "tag", $postPerPage = 10, $headTitle = "Related Posts:", $layout = "card")
{
    if ($by == 'tag') {
        $tagID = mncore_tagID();
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $postPerPage,
            'orderby' => 'date',
            'order' => 'DESC',
            'post__not_in' => array(get_the_ID()),
            'tag__in' => array($tagID),
        );
    } elseif ($by == 'category') {
        $catID = mncore_catID();
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $postPerPage,
            'orderby' => 'date',
            'order' => 'DESC',
            'post__not_in' => array(get_the_ID()),
            'cat' => $catID,
        );
    } else {
        // do nothing
    }

    $query = new WP_Query($args);
    if ($query->have_posts()) {
?>
        <div class="qItemPr">
            <h3 class="globalElementHead"><?php echo $headTitle; ?></h3>
            <div class="qItemWr <?php echo $layout ?>">
            <?php
            while ($query->have_posts()) {
                $query->the_post();
                if ($layout == 'card') {
                    echo show_related_post_card_layout();
                } elseif ($layout == 'list') {
                    echo related_post_list_layout();
                }
            }
            // reset post data
            wp_reset_postdata();
        } else {
            // no posts found
        }
            ?>
            </div>
        </div>
    <?php
}


function related_post_list_layout()
{
    ?>
        <div class="qItem list">
            <h3>
                <a title="<?php echo get_the_title(); ?>" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </h3>
        </div>
    <?php
}

function show_related_post_card_layout()
{
    ?>
        <div class="qItem">
            <div class="globalQTop">
                <a title="<?php echo get_the_title(); ?>" href="<?php echo get_the_permalink(); ?>">
                    <?php echo mnel_show_featured_image(); ?>
                </a>
            </div>
            <div class="globalQBot">
                <div class="globalQTitleWr">
                    <h3 class="globalQTitle">
                        <a title="<?php echo get_the_title(); ?>" href="<?php echo $permalink; ?>">
                            <?php echo get_the_title(); ?>
                        </a>
                    </h3>
                </div>
                <div class="globalQMetaWr">
                    <?php echo mnel_show_post_date(); ?>
                    <?php echo mnel_show_post_author(false); ?>
                    <?php echo mnel_show_comments_count(); ?>
                    <?php echo mnel_show_post_excerpt(50); ?>
                    <?php echo mnel_show_readmore_button('', 'Baca Artikel'); ?>
                </div>
            </div>
        </div>
    <?php
}
