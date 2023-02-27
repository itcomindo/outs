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
                <?php
                echo mnel_show_featured_image();
                $title = get_the_title();
                echo "<h1 class='globalPostTitle'>$title</h1>";
                echo mnel_show_post_views();
                echo mnel_show_post_tags();
                echo mnel_show_post_author(false);
                echo mnel_show_post_date();
                echo mnel_show_post_category();
                echo mnel_show_comments_count();
                ?>
                <!-- the content start -->
                <div class="theContent">
                    <?php echo the_content(); ?>
                    <!-- show comment form -->
                    <?php echo mnqu_show_global_query('tag', 10, 'Related Post By Tag', 'list'); ?>
                    <?php echo mnqu_show_global_query('category', 10, 'Related Post By Category'); ?>

                    <?php
                    if (comments_open() || get_comments_number()) {
                    ?>
                        <div id="globalCommentWr" class="active">
                            <?php comments_template(); ?>

                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- the content end -->
            </div>
            <!-- single left end -->
            <!-- singler right start -->
            <div class="singleRight singleCol">
                <aside class="singleAside">
                    <div class="singleSidebar">
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
get_footer();
