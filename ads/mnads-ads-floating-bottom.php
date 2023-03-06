<?php
defined('ABSPATH') || exit;

function mnads_show_ads_floating_bottom()
{

    if (is_home() || is_single() && has_category('journal') || is_page() || is_category() || is_tag() && !has_category('journal')) {
        echo '<div id="adsFloBotPR" class="active">';
        echo '<div id="toggleCloseAdsFloBotPR" class="active"> Close</div>';
        echo '<div id="toggleOpenAdsFloBotPR" class="inactive">Open</div>';
        echo mnads_ads_floating_bottom_content();
        echo '</div>';
    }
}
add_action('wp_body_open', 'mnads_show_ads_floating_bottom');




function mnads_ads_floating_bottom_content()
{
    $users = get_users(array(
        'meta_key' => 'user_active_status',
        'meta_value' => 'yes',
        'meta_compare' => '=',
    ));
    // randomize the array of users then pick one user from the array of users and display their name
    shuffle($users);
    $user = $users[0];
    $userID = $user->ID;
    $userWebsite = carbon_get_user_meta($userID, 'website_url_user');
    $userLogo = carbon_get_user_meta($userID, 'logo_image_user');
    $namaPerusahaan = carbon_get_user_meta($userID, 'nama_perusahaan_user');
    $description = carbon_get_user_meta($userID, 'description_user');

?>
    <div class="adsFloContent">
        <h3 class="adsFloBotHead"><?php echo $namaPerusahaan; ?></h3>

        <img class="adsFloBotImgWr" width="50" height="50" src="<?php echo $userLogo; ?>" alt="<?php echo $namaPerusahaan; ?>" title="<?php echo $namaPerusahaan; ?>">

        <small><?php echo $namaPerusahaan . ' ' .$description; ?></small>
        <a class="adsFloLogoLink" title="<?php echo $namaPerusahaan; ?>" href="<?php echo $userWebsite; ?>" rel="noopener, nofollow" target="_blank">Visit Website</a>
    </div>
<?php

}
