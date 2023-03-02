<?php
defined('ABSPATH') || exit;

function mnads_show_ads_in_header() {
    $adsInHeader = '<div class="adsInHeaderPr">';
    $adsInHeader .= '<div class="adsInHeaderWr">';
    $adsInHeader .= '<a href="https://www.google.com" rel="noopener, nofollow" target="_blank" title="Google">';
    $adsInHeader .= '<img src="'. get_template_directory_uri() .'/images/ads-header.gif" alt="Google" title="google" />';
    $adsInHeader .= '</a>';
    $adsInHeader .= '</div>';
    $adsInHeader .= '</div>';
    return $adsInHeader;
}