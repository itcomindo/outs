<?php
defined('ABSPATH') || exit;

function mnads_show_ads_multiplex_ads_home()
{
    $option = carbon_get_theme_option('enable_ads_very_bottom_multiplex_ads_homepage');
    if ($option) {
        $adsContent = get_option_enable_ads_home_multiplex_ads();
        if (!empty($adsContent)) {
            $clientID = mnads_get_google_ca_pub();
            $slotID = $adsContent;
            echo '<div id="adsHomeMultiplexWr">
            <ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-7273106919951725"
     data-ad-slot="7901447225"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>';
        }
    }
}

