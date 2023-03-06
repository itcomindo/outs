<?php
defined('ABSPATH') || exit;

function get_option_enable_ads_very_bottom_multiplex_ads()
{
    $option = carbon_get_theme_option('enable_ads_very_bottom_multiplex_ads');
    if ($option == true) {
        $adsContent = carbon_get_theme_option('ads_very_bottom_multiplex_ads_1');
        if (!empty($adsContent)) {
            return $adsContent;
        } else {
            $adsContent = 7901447225;
            return $adsContent;
        }
    }
}