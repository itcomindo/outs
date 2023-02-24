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
    <!-- SEO Plugin by Budiharyono.com -->
    <?php echo mn_seo(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>