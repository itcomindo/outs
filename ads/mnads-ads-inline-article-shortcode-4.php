<?php
defined('ABSPATH') || exit;
/**
 * Shortcode to show ads inline in article
 */
function get_option_ads_inline_in_article_empat()
{
    $option = carbon_get_theme_option('enable_ads_inline_shortcode_in_article_option_4');
    if ($option == true) {
        $adsInArticle = true;
    } else {
        $adsInArticle = false;
    }
    return $adsInArticle;
}

function mnads_get_shortcode_ads_inline_in_aricle_empat()
{
    $adsInArticle = get_option_ads_inline_in_article();
    if ($adsInArticle == true) {
        $clientID = mnads_get_google_ca_pub();
        $slotID = carbon_get_theme_option('ads_slot_id_4_mn');
        if (empty($slotID)) {
            $slotID = '4647984174';
        } else {
            $slotID = $slotID;
        }
        $script = '<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="' . $clientID . '"
     data-ad-slot="' . $slotID . '"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>';
    }
    $ads = '<div class="inlineAdsPr">
     <div class="inlineAdsWr">
          ' . $script . '
     </div>
</div>';
    return $ads;
}



function mnads_show_shortcode_ads_inline_in_aricle_empat()
{
    $adsInArticle = get_option_ads_inline_in_article_empat();
    if ($adsInArticle == true) {
        add_shortcode('ads4', 'mnads_get_shortcode_ads_inline_in_aricle_empat');
    }
}
add_action('init', 'mnads_show_shortcode_ads_inline_in_aricle_empat');
