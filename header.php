<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>

<html lang="id-ID" class="no-js" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="googlebot" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php $favicon = '/favicon.png'; ?>
    <link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
    <meta name="google-site-verification" content="t0f4zeLk5-eCUVe-mmb-v6npo10aUcuiv8RyYsj9j-g" />
    <?php echo mnads_show_google_adsense_code_on_head(); ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5T788RZ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- SEO Plugin by Budiharyono.com -->
    <?php echo mnplug_show_seo(); ?>

    <?php mn_google_site_verification(); ?>
    <?php mn_bing_site_verification(); ?>
    <?php echo mnoption_facebook_api(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T788RZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php

    mntp_topbar();
    mntp_header();
    mntp_header_menu();


    wp_body_open();


    ?>