<?php
defined('ABSPATH') || exit;

function mn_show_unsplash_author()
{
    $unsplash = carbon_get_the_post_meta('unsplash_author');
    if (!empty($unsplash)) {
        $unsplash = '<span class="unsplashAuthor">Photo by: <a rel="noopener, nofollow" target="_blank"  href="https://unsplash.com/@'. $unsplash . '?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">@' . $unsplash . '</span>';
        return $unsplash;
    }
}
