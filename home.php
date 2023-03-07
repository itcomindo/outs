<?php
defined('ABSPATH') || exit;
get_header();
show_basic_query(6);
echo mnads_show_ads_home_row_one();
echo mntp_show_home_content_column();

function mnoption_get_infinite_scroll_option()
{
    $option = carbon_get_theme_option('enable_disable_infinite_scroll_mn');
    if ($option == true) {
        echo "<script>
        window.addEventListener('DOMContentLoaded', (event) => {
            jQuery(function () {
            
                jQuery('.homeContColPostsWr').infiniteScroll({
                    // options
                    path: '.globalPaged a.next',
                    append: '.homeContColPostItem',
                history: true,
            });
        });
    });</script>";
}
}

add_action('wp_footer', 'mnoption_get_infinite_scroll_option');

get_footer();