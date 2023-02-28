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
            <div class="qOneWr">
                <div class="qOneTOp"></div>
                <div class="qOneBot qItemWr">
                    <?php
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $title = get_the_title();
                            $permalink = get_the_permalink();
                    ?>
                            <div class="qItem">
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
                                    <?php //echo mnel_show_post_excerpt(60); ?>
                                    <?php // echo mnel_show_comments_count(); ?>
                                    <?php // echo mnel_show_readmore_button(); ?>
                                    <?php // echo mnel_show_post_author(true); ?>
                                    <?php // echo mnel_show_post_date(); ?>
                                    <?php // echo mnel_show_post_tags(); ?>
                                    <?php // echo mnel_show_post_category(); ?>
                                </div>
                            </div>
                    <?php

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
