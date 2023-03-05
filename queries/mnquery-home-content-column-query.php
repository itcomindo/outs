<?php
defined('ABSPATH') || exit;
function mnqu_show_content_column_query()
{
?>
    <div class="homeContColPostsWr">
        <?php
        // get last 6 posts to get the ID's of the posts to exclude from the query
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'journal',
        );
        $query = new WP_Query($args);
        $postIDs = array();
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $postIDs[] = get_the_ID();
            }
            wp_reset_postdata();
        } else {
            echo 'No posts found';
        }
        // get the rest of the posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'post__not_in' => $postIDs,
            'category_name' => 'journal',
            // paged
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $permalink = get_the_permalink();
        ?>
                <div class="homeContColPostItem">
                    <div class="homeContColPostItemLeft">
                        <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                            <?php echo mnel_show_featured_image(); ?>
                        </a>
                    </div>
                    <div class="homeContColPostItemRight">
                        <h3><a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                        <?php echo mnel_show_post_tags('homeTagWr', 'homeTagsItemsWr'); ?>
                    </div>
                </div>
                <!-- display paged -->
        <?php
            }
            wp_reset_postdata();
        }
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $query));
        } else {
            echo '<div class="globalPaged">';
            echo paginate_links(array(
                'total' => $query->max_num_pages,
                'prev_text' => __('«'),
                'next_text' => __('»'),
            ));
            echo '</div>';
        }
        ?>
    </div>
<?php
}
