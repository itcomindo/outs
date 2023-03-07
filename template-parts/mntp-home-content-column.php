<?php
defined('ABSPATH') || exit;



/**
 * Show the home content column
 * 3 columns, left, middle, right
 * left and right for the sidebar
 * middle for query posts
 */

function mntp_show_home_content_column()
{
?>
    <div id="homeContPr" class="section globalSection">
        <div class="container">
            <div class="homeContColWr">
                <div class="homeContLeft homeContCol">
                    <aside class="homeAsideWr">
                        <div class="globalSidebar">
                            <?php echo mnel_show_sidebar_head('globalSidebarHeadWr', 'Post Tags'); ?>
                        </div>
                    </aside>
                </div>
                <div class="homeContMid homeContCol">
                    <?php // echo mnads_show_ads_multiplex_ads_home(); ?>
                    <?php echo home_query(); ?>
                    <?php echo mnqu_show_content_column_query(); ?>
                </div>
                <div class="homeContRight homeContCol">
                    <aside class="globalAsideWr">
                        <div class="globalSidebar">
                            <?php echo mnel_show_sidebar_head('globalSidebarHeadWr', 'Popular Posts', 'right'); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
<?php
}
