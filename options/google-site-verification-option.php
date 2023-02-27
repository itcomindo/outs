<?php
defined('ABSPATH') || exit;

function mn_google_site_verification()
{
    $google_site_verification = carbon_get_theme_option('goolge_site_verification_mn');
    if (empty($google_site_verification)) {
        // do nothing
    } else {
        function show_google_site_verification()
        {
            $gvercode = carbon_get_theme_option('goolge_site_verification_mn');
            $gvercode = str_replace('<meta name="google-site-verification" content="', '', $gvercode);
            $gvercode = str_replace('" />', '', $gvercode);
?>
            <!-- google site verification -->
            <meta name="google-site-verification" content="<?php echo $gvercode ?>" />
<?php
        }
        add_action('wp_head', 'show_google_site_verification', '5');
    }
}
