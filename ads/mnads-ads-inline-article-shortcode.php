<?php
defined('ABSPATH') || exit;

/**
 * Shortcode to show ads inline in article
 */

function get_option_ads_inline_in_article()
{

     $option = carbon_get_theme_option('enable_ads_inline_shortcode_in_article_option');
     if ($option == true) {
          $adsInArticle = true;
     } else {
          $adsInArticle = false;
     }
     return $adsInArticle;
}

function mnads_get_shortcode_ads_inline_in_aricle()
{
     $adsInArticle = get_option_ads_inline_in_article();
     if ($adsInArticle == true) {
          $clientID = mnads_get_google_ca_pub();
          $slotID = carbon_get_theme_option('ads_slot_id_mn');
          if (empty($slotID)) {
               $slotID = '2647983172';
          } else {
               $slotID = $slotID;
          }

          $script = '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-' . $clientID . '"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
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

function mnads_show_shortcode_ads_inline_in_aricle()
{
     $adsInArticle = get_option_ads_inline_in_article();
     if ($adsInArticle == true) {
          add_shortcode('ads', 'mnads_get_shortcode_ads_inline_in_aricle');
     }
}

add_action('init', 'mnads_show_shortcode_ads_inline_in_aricle');


/**
 * Create button in TinyMCE editor to insert shortcode [ads]
 */

function add_ads_button()
{
     $adsInArticle = get_option_ads_inline_in_article();
     if ($adsInArticle == true) {
          if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
               return;
          }

          if (get_user_option('rich_editing') == 'true') {
               add_filter('mce_external_plugins', 'add_ads_tinymce_plugin');
               add_filter('mce_buttons', 'register_ads_button');
          }
     }
     
}
add_action('admin_head', 'add_ads_button');



function add_ads_tinymce_plugin($plugin_array)
{
     $plugin_array['ads_button'] = get_template_directory_uri() . '/js/ads-button.js';
     return $plugin_array;
}

function register_ads_button($buttons)
{
     array_push($buttons, 'ads');
     return $buttons;
}

function add_ads_button_style($buttons)
{
     global $typenow;
     if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
          return;
     }
     if (!in_array($typenow, array('post', 'page'))) {
          return;
     }
     wp_enqueue_style('ads-button-style', get_template_directory_uri() . '/css/ads-button.css');
}
add_action('admin_enqueue_scripts', 'add_ads_button_style');