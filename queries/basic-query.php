<?php
defined('ABSPATH') || exit;

function show_basic_query()
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
    );
?>
    <section id="qOnePr" class="section">
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

                                    <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                                        <?php echo mn_show_featured_image(); ?>
                                    </a>
                                </div>
                                <div class="qItemBot">
                                    <?php echo mn_show_post_views(); ?>
                                    <h3 class="globalQTitle"><a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                                    <?php echo mn_show_post_excerpt(160); ?>
                                    <?php echo mn_show_comments_count(); ?>
                                    <?php echo mn_show_readmore_button(); ?>
                                    <?php echo mn_show_post_author(true); ?>
                                    <?php echo mn_show_post_date(); ?>
                                    <?php echo mn_show_post_tags(); ?>
                                    <?php echo mn_show_post_category(); ?>
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
