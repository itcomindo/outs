<?php
defined('ABSPATH') || exit;


function mnel_show_logo_perusahaan_url_only() {
    if (is_single()) {
        $authorID = get_post_field('post_author', mncore_postID());
        $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
        return $urlLogo;

    } elseif (is_tag()) {
        $postID = mncore_get_post_id_in_tag();
        $authorID = get_post_field('post_author', $postID);
        $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
        return $urlLogo;
    }

}



/**
 * show logo
 * @param $link boolean
 * @param $class string
 * @param $width integer
 */

function mnel_show_logo_perusahaan($link, $class = 'globalLogoPerusahaan', $width = '150')
{
    if (is_single()) {
        if ($link) {
            // wait
        } else {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
            $logo = '<img class="' . $class . '" src="' . $urlLogo . '" title="' . $namaPerusahaan . '" alt="' . $namaPerusahaan . '" width="' . $width . '">';

            return $logo;
        }
    } elseif (is_home()) {
        if ($link) {
            // wait
        } else {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
            $logo = '<img class="' . $class . '" src="' . $urlLogo . '" alt="' . $namaPerusahaan . '" title="' . $namaPerusahaan . '" width="' . $width . '">';

            return $logo;
        }
    } elseif (is_page()) {
    } elseif (is_search()) {
    } elseif (is_tag()) {
        if ($link) {
            // wait
        } else {
            $postID = mncore_get_post_id_in_tag();
            $authorID = get_post_field('post_author', $postID);
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
            $logo = '<img class="' . $class . '" src="' . $urlLogo . '" alt="' . $namaPerusahaan . '" title="' . $namaPerusahaan . '" width="' . $width . '">';
            return $logo;
        }
    }
}


function mnel_logo_and_name()
{
?>
    <span class="globalLogoAndName">
        <?php echo mnel_show_logo_perusahaan(false, '', '20'); ?>
        <?php echo mnel_show_nama_perusahaan(false); ?>
    </span>
<?php
}
