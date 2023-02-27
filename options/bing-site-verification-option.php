<?php
defined('ABSPATH') || exit;

function mn_bing_site_verification()
{
    $bing_site_verification = carbon_get_theme_option('bing_site_verification_mn');
    if (empty($bing_site_verification)) {
        // do nothing
    } else {
        function show_bing_site_verification()
        {
            $bvercode = carbon_get_theme_option('bing_site_verification_mn');
            $bvercode = str_replace('<meta name="msvalidate.01" content="', '', $bvercode);
            $bvercode = str_replace('" />', '', $bvercode);
?>
            <!-- bing site verification -->
            <meta name="msvalidate.01" content="<?php echo $bvercode ?>" />
<?php
        }
        add_action('wp_head', 'show_bing_site_verification', '5');
    }
}
