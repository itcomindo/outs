<?php
defined('ABSPATH') || exit;
get_header();
?>
<section class="globalSection section" id="singlePr">
    <div class="container">
        <!-- single wr start -->
        <div class="singleWr">
            <!-- single left start -->
            <div class="singleLeft singleCol">
                <div class="singleFeaturedImageWr">
                    <div class="singlePostViewsWr">
                        <?php echo mnel_show_post_views(); ?>
                    </div>
                    <?php echo mncore_custom_featured_image(); ?>
                </div>
                <div class="singlePostTitleWr">
                    <h1 class="globalPostTitle"><?php echo mnel_show_custom_post_title(); ?></h1>
                </div>
                <div class="singleMetaWr">
                    <div class="singleAuthorWr">
                        <?php
                        $isEditor = mncore_is_editor_role();
                        if ($isEditor) {
                        ?>
                            By: <?php echo mnuser_logo_and_name(); ?>
                        <?php
                        } else {
                            echo mnel_show_post_author(false);
                        }
                        ?>

                    </div>

                    <?php echo mnel_show_post_date(); ?>
                    <?php echo mnel_show_post_category(); ?>
                </div>
                <?php


                // echo mnel_show_comments_count();
                ?>
                <!-- the content start -->
                <div class="theContent">
                    <?php echo the_content(); ?>
                </div>
                <div class="singleTagWr">
                    <?php echo mnel_show_post_tags(); ?>
                </div>
                <?php echo mnads_show_ads_after_content(); ?>
                <div class="singleCommentFormWr">
                    <?php
                    if (comments_open() || get_comments_number()) {
                    ?>
                        <div id="globalCommentWr" class="active">
                            <?php //comments_template(); 
                            ?>

                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="singleRelatedPostWr">
                    <?php //echo mnqu_show_global_query('tag', 10, 'Related Post By Tag', 'list'); 
                    ?>
                    <?php // echo mnqu_show_global_query('category', 10, 'Related Post By Category'); 
                    ?>

                </div>
                <!-- the content end -->
            </div>
            <!-- single left end -->
            <!-- singler right start -->
            <div class="singleRight singleCol">
                <aside class="globalAsideWr">
                    <div class="globalSidebar">
                        <?php echo mnel_show_sidebar_head('globalSidebarHeadWr', 'Sidebar Head'); ?>
                    </div>
                </aside>
            </div>
            <!-- singler right end -->
        </div>
        <!-- single wr end -->
    </div>
</section>
<?php
if (!has_category('journal')) {
    echo mnel_show_chatbox();
}
get_footer();
