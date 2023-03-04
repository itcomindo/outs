<?php
defined('ABSPATH') || exit;

function mnplugin_show_single_post_schema()
{
    $title = mnel_show_custom_post_title();
    $alamat = mncore_show_alamat_local_business();
    $district = do_shortcode('[distrik]');
    if (empty($district)) {
        $districtKota = do_shortcode('[kota]');
    } else {
        $kota = do_shortcode('[kota]');
        $districtKota = $district . ' ' . $kota;
    }
    $email = mncore_show_author_email();
    $provinsi = get_cat_name(mncore_catID());
    $kodepos = mncore_local_business_kodepos();
    if (empty($kodepos)) {
        $kodepos = the_kodepos();
    } else {
        $kodepos = $kodepos;
    }
    $logo = mnuser_show_logo_perusahaan_url_only();
    $image = mncore_custom_featured_image(false);
    $phone = mncore_show_user_phone();
?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EmploymentAgency",
            "name": "<?php echo $title . ' ' . $kota . ' ' . $provinsi ?>",
            "description": "<?php echo $title . ' ' . $kota . ' ' . $provinsi ?>",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "<?php echo $alamat ?>",
                "addressLocality": "<?php echo $districtKota ?>",
                "addressRegion": "<?php echo $provinsi ?>",
                "postalCode": "<?php echo $kodepos ?>",
                "addressCountry": "ID"
            },
            "image": [
                "<?php echo $logo; ?>",
                "<?php echo $image; ?>"
            ],
            "email": "<?php echo mncore_show_author_email(); ?>",
            "telePhone": "<?php echo $phone; ?>",
            "url": "<?php echo get_the_permalink(); ?>",
            "paymentAccepted": ["cash", "check"],
            "openingHours": "Mo,Tu,We,Th,Fr 07:00-19:00",
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "07:00",
                "closes": "19:00"
            }],
            "priceRange": "$"
        }
    </script>
<?php
}


add_action('wp_head', 'mnplugin_show_single_post_schema', 1);
