<?php
defined('ABSPATH') || exit;
/**
 * it's a function
 * contain: wp post query for sticky posts
 */

function mnqu_show_sticky_post_query($postPerPage = 3)
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $postPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => 1,
        'post__in' => get_option('sticky_posts'),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $permalink = get_the_permalink();
?>
            <div class="slideItem">
                <div class="qItemTop">
                    <?php echo mnel_show_post_views('homePostView'); ?>
                    <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                        <?php echo mnel_show_featured_image(); ?>
                    </a>
                </div>
                <div class="qItemBot">
                    <h3 class="globalQTitle">
                        <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                            <?php echo $title; ?>
                        </a>
                    </h3>
                    <?php echo mnel_show_post_excerpt(120); 
                    ?>
                    <?php // echo mnel_show_comments_count(); 
                    ?>
                    <?php echo mnel_show_readmore_button(); 
                    ?>
                    <?php // echo mnel_show_post_author(true); 
                    ?>
                    <?php // echo mnel_show_post_date(); 
                    ?>
                    <?php // echo mnel_show_post_tags(); 
                    ?>
                    <?php // echo mnel_show_post_category(); 
                    ?>
                </div>
            </div>
<?php
        }
        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }
}
