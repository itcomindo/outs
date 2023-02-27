<?php
defined('ABSPATH') || exit;

function mnoption_facebook_api() {
    $fapi = carbon_get_theme_option('facebook_app_id_mn');
    if (empty($fapi)) {
        // do nothing
    } else {
        function show_facebook_api() {
            $fapi = carbon_get_theme_option('facebook_app_id_mn');
?>
            <!-- facebook api -->
            <meta property="fb:app_id" content="<?php echo $fapi ?>" />
<?php
        }
        add_action('wp_head', 'show_facebook_api', '5');
    }
}