<?php
defined('ABSPATH') || exit;
/**
 * it's a function
 * @param string $class is the class name of the span 
 * @param int $iconSize is the size of the icon in px
 * @param px *e90d0186
 */
function mnel_show_five_stars($class = 'globalFiveStars') {
    echo '<span class="'. $class .'">';
    foreach (range(1, 5) as $i) {
        echo '<i class="fa-solid fa-star"></i>';
    }
    echo '</span>';
}
