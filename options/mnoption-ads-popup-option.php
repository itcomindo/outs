<?php
defined('ABSPATH') || exit;

function mnoption_enable_ads_popup_option() {
    $option = carbon_get_theme_option('ads_popup_option');
    if ($option == true) {
        $adsPopup = true;
        return $adsPopup;
    } else {
        $adsPopup = false;
        return $adsPopup;
    }
}