<?php
defined('ABSPATH') || exit;

function mn_show_readmore_button($class = 'globalReadmoreBtn', $text = 'Read More')
{
    $postId = mn_postID();
    $title = get_the_title($postId);
    $permalink = get_the_permalink($postId);
    $readmorebutton = '<a class="' . $class . '" title="' . $title . '" href="' . $permalink . '">' . $text . '</a>';
    return $readmorebutton;
}
