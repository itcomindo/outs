<?php
defined('ABSPATH') || exit;

function show_basic_query($postPerPage = 7, $sticky = false)
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $postPerPage,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => get_option('sticky_posts'),
    );
?>
    <section id="qOnePr" class="section globalSection">
        <div class="container">
            <?php echo mnads_home_afer_header_menu(); ?>
            <div class="qOneWr">
                <div class="qOneTOp"></div>
                <div class="qOneBot qItemWr">
                    <?php
                    $query = new WP_Query($args);
                    $count = 1;
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $title = get_the_title();
                            $permalink = get_the_permalink();
                    ?>
                            <div class="qItem theGrid card-<?php echo $count; ?>">
                                <div class="qItemTop card-<?php echo $count; ?>-top">
                                    <?php echo mnel_show_post_views('homePostView'); ?>
                                    <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                                        <?php //echo mnel_show_featured_image(); 
                                        ?>
                                        <?php echo mncore_custom_featured_image(true); ?>
                                    </a>
                                </div>
                                <div class="qItemBot card-<?php echo $count; ?>-bot">
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
                                    <?php // echo mnel_show_comments_count(); 
                                    ?>
                                    <?php echo mnel_show_readmore_button(); ?>
                                    <?php // echo mnel_show_post_author(true); 
                                    ?>
                                    <?php // echo mnel_show_post_tags(); 
                                    ?>
                                    <?php // echo mnel_show_post_category(); 
                                    ?>
                                </div>
                            </div>
                    <?php
                            $count++;
                            // if count = 2 then add a div with class qItemStickyWr then insert mnqu_show_sticky_post_query() function
                            if ($count == 2) {
                                echo '<div class="qItem theSlide">';
                                echo '<div class="theSlideWr">';
                                echo mnqu_show_sticky_post_query(5);
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No posts found';
                    }
                    ?>
                </div>
            </div>

        </div>

    </section>
<?php
}
