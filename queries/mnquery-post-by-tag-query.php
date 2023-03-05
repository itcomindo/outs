<?php
defined('ABSPATH') || exit;

function mnquery_show_post_based_on_tag()
{
?>
    <div class="qItemWr tagCardWr">
        <?php
        // get tag id
        $tag_id = get_queried_object_id();
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'tag_id' => $tag_id,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        );
        $query = new WP_Query($args);
        $count = 1;
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $permalink = get_the_permalink();
        ?>
                <div class="qItem theGrid tagCard-<?php echo $count; ?>">
                    <div class="qItemTop tagCard-<?php echo $count; ?>-top">
                        <?php echo mnel_show_post_views('homePostView'); ?>
                        <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                            <?php echo mncore_custom_featured_image(true); ?>
                        </a>
                    </div>
                    <div class="qItemBot tagCard-<?php echo $count; ?>-bot">
                        <small class="qItemDate">
                            <?php echo mnel_show_post_date(); ?>
                        </small>
                        <h3 class="globalQTitle">
                            <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                                <?php echo $title; ?>
                            </a>
                        </h3>
                        <div class="qItemExcerptWr">
                            <?php echo mnel_show_post_excerpt(60); ?>
                        </div>
                        <?php echo mnel_show_readmore_button(); ?>
                    </div>
                </div>

        <?php
                $count++;
            }
        wp_reset_postdata();
        } else {
            echo '<div class="noPostFound">No post found</div>';
        }
        ?>
    </div>
<?php
}
