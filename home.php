<?php
defined('ABSPATH') || exit;
get_header();
show_basic_query(6);
echo mnads_show_ads_home_row_one();
echo mntp_show_home_content_column();
get_footer();