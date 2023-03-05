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
                    <?php echo mnel_show_post_views('singlePostViewsWr'); ?>
                    <?php echo mncore_custom_featured_image(true); ?>
                </div>
                <?php
                echo mnel_show_unsplash_author($isJournal, 'unsplashAuthor');
                ?>
                <div class="singlePostTitleWr">
                    <h1 class="globalPostTitle">
                        <?php echo mnel_show_custom_post_title(); ?>
                    </h1>
                </div>
                <div class="singleMetaWr">
                    <div class="singleAuthorWr">
                        <?php
                        $isEditor = mncore_is_editor_role();
                        if ($isEditor) {
                        ?>
                            By: <?php echo mnel_logo_and_name(); ?>
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
                <?php
                if (has_category('journal')) {
                ?>
                    <div class="singleRelatedPostWr">
                        <?php echo mnqu_show_global_query('tag', 6, 'Related Post By Tag', 'list', 'yes'); ?>
                        <?php echo mnqu_show_global_query('category', 6, 'Related Post By Category'); 
                        ?>
                    </div>
                <?php
                }
                ?>
                <!-- the content end -->
            </div>
            <!-- single left end -->
            <!-- singler right start -->
            <div class="singleRight singleCol">
                <aside class="globalAsideWr">
                    <div class="globalSidebar">
                        <?php echo mnel_show_sidebar_head('globalSidebarHeadWr', 'Sidebar Head', 'right'); ?>
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
    echo mnel_show_mobile_floating_buttons();
} else {
    echo mnel_show_mobile_floating_buttons();
}
get_footer();
