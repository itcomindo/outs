<?php
defined('ABSPATH') || exit;
/**
 * it's a function
 * @param string $altit is the alt text of the icon
 * @param int $width is the width of the icon in px
 * @return string is the html code of the icon
 */
function mnel_show_phone_icon_old($altit = 'iklan', $width = 16) {
    $icon = '<img width="'. $width .'" src="' . get_template_directory_uri() . '/images/old-phone.webp" alt="' . $altit . '" title="'. $altit .'">';
    return $icon;
}