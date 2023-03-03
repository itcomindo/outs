<?php
defined('ABSPATH') || exit;
get_header();
?>


<section class="globalSection section" id="singlePr">
    <div class="container">
        <!-- single wr start -->
        <?php
        if (has_category('journal')) {
        ?>
            <div class="singleWr">
                <h1>Under Construction</h1>
            </div>
        <?php
        } else {
        ?>
            <div class="singleWr">
                <!-- single left start -->
                <div class="singleLeft singleCol">
                    <div class="singleFeaturedImageWr">
                        <?php echo mncore_custom_featured_image(true); ?>
                    </div>

                    <div class="singlePostTitleWr">
                        <h1 class="globalPostTitle">
                            <?php echo mnel_show_custom_tag_title(); ?>
                        </h1>
                    </div>

                    <!-- the content start -->
                    <?php echo mnel_show_content_in_tag(); ?>
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
        <?php
        }
        ?>

        <!-- single wr end -->
    </div>
</section>

<?php
if (!has_category('journal')) {
    echo mnel_show_chatbox();
}
get_footer();
