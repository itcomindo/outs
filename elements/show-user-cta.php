<?php
defined('ABSPATH') || exit;





/**
 * Show user cta
 * ini bisa chat whatsapp atau telepon
*/
function mnel_show_user_phone_number($number) {
    $authorID = mncore_authorID();
    $phone = carbon_get_user_meta($authorID, 'phone_number_user');
    if ($number) {
        $phone = $phone;
    } else {
        // using regex replace the first number 08 to 628 and replace (-) with nothing
        $phone = preg_replace('/^08/', '628', $phone);
        $phone = str_replace('-', '', $phone);
        $phone = $phone;
    }
    return $phone;
    if (is_single()) {
        // wait
    } elseif (is_tag()) {
        // wait

    } elseif (is_author()) {
        // wait
    }
}

function mnel_show_user_wacall($type = "whatsapp") {
    $phone = mnel_show_user_phone_number(false);
    if ($type == 'whatsapp') {
        $ctaButton = "<a href='https://api.whatsapp.com/send?phone=$phone' class='globalCtaButton' target='_blank'>Chat via Whatsapp</a>";

    } elseif ($type == 'call') {
        $ctaButton = "<a href='tel:$phone' class='globalCtaButton' target='_blank'>Call</a>";
    } elseif ($type == 'linknumber') {
        $ctaButton = $phone;
    }
    return $ctaButton;
}