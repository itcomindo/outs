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
                    <?php echo mncore_custom_featured_image(); ?>
                </div>
                <div class="singlePostTitleWr">
                    <?php // echo '<h1 class="globalPostTitle">' . get_the_title() . '</h1>'; 
                    ?>
                </div>
                <?php


                // echo mnel_show_comments_count();
                ?>
                <!-- the content start -->
                <div class="theContent">
                    <?php echo mnel_show_content_in_tag(); ?>
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
