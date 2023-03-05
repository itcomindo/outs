<?php
defined('ABSPATH') || exit;

/**
 * Show Unsplash Author
 * @param string $class is the class name
 */

function mnel_show_unsplash_author($isJournal, $class = 'unsplashAuthor')
{
    $unsplash = carbon_get_the_post_meta('unsplash_author');
    if (!empty($unsplash)) {
        $unsplash = '<span class="' . $class . '">Photo by: <a rel="noopener, nofollow" target="_blank"  href="https://unsplash.com/@' . $unsplash . '?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">@' . $unsplash . '</span>';
        return $unsplash;
    }
    
}
