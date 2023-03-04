<?php
defined('ABSPATH') || exit;


function mnads_get_google_ca_pub()
{
    $caPub = carbon_get_theme_option('google_adsense_code_verification_mn');
    if (empty($caPub)) {
        return 'ca-pub-7273106919951725';
    } else {
        return $caPub;
    }
}




function mnads_show_google_adsense_code_on_head()
{
    $adsense_code = carbon_get_theme_option('google_adsense_code_verification_mn');
    if (empty($adsense_code)) {
?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo mnads_get_google_ca_pub(); ?>" crossorigin="anonymous"></script>
    <?php
    } else {
    ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo mnads_get_google_ca_pub(); ?>" crossorigin="anonymous"></script>
<?php
    }
}
?>