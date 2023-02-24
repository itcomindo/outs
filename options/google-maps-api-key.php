<?php
defined('ABSPATH') || exit;
function mn_google_map_api_key() {
    $googleMapApiKey = carbon_get_theme_option('google_map_api_mn');
    if (empty ($googleMapApiKey)) {
        // do nothing
    } else {
        $googleMapApiKey = carbon_get_theme_option('google_map_api_mn');
        return $googleMapApiKey;
    }
}