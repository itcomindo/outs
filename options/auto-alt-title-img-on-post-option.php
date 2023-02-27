<?php
defined('ABSPATH') || exit;

function mn_autoalttileonimage()
{
    $option = carbon_get_theme_option('enabling_auto_alt_and_title_image_in_post_mn');
    if ($option == true) {
        function mn_the_content($content)
        {
            $postID = get_the_ID();
            $postTitle = get_the_title($postID);
            $content = preg_replace('/<img(.*?)alt="(.*?)"(.*?)\/>/', '<img$1alt="' . $postTitle . '"$3/>', $content);
            $content = preg_replace('/<img(.*?)title="(.*?)"(.*?)\/>/', '<img$1title="' . $postTitle . '"$3/>', $content);
            return $content;
        }
        add_filter('the_content', 'mn_the_content');
    } else {
    }
}
add_action('init', 'mn_autoalttileonimage');
