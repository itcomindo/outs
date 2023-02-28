<?php
defined('ABSPATH') || exit;

function mnuser_show_nama_perusahaan($link, $class = 'globalNamaPerusahaan')
{
    if (is_single()) {
        if ($link) {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $authorLink = get_author_posts_url($authorID);
            $theAuthor = '<a class="globalAuthorLink" title="' . $namaPerusahaan . '" href="' . $authorLink . '">' . $namaPerusahaan . '</a>';
            return $theAuthor;
        } else {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $theAuthor = '<span class="' . $class . '">' . $namaPerusahaan . '</span>';
            return $namaPerusahaan;
        }
    } elseif (is_home()) {
        if ($link) {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $authorLink = get_author_posts_url($authorID);
            $theAuthor = '<a class="globalAuthorLink" title="' . $namaPerusahaan . '" href="' . $authorLink . '">' . $namaPerusahaan . '</a>';
            return $theAuthor;
        } else {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $theAuthor = '<span class="' . $class . '">' . $namaPerusahaan . '</span>';
            return $theAuthor;
        }
    } elseif (is_archive()) {
        // wait
    } elseif (is_page()) {
        // wait
    } elseif (is_search()) {
        // wait
    }
}


/**
 * show logo
 * @param $link boolean
 * @param $class string
 * @param $width integer
*/

function mnuser_show_logo_perusahaan($link, $class = 'globalLogoPerusahaan', $width = '150') {
    if (is_single()) {
        
    } elseif (is_home()) {
        if ($link) {
            // wait
        } else {
            $authorID = get_post_field('post_author', mncore_postID());
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $urlLogo = carbon_get_user_meta($authorID, 'logo_image_user');
            $logo = '<img class="' . $class . '" src="' . $urlLogo . '" alt="' . $namaPerusahaan . '" width="' . $width . '">';

            return $logo;
        }

    } elseif (is_archive()) {

    } elseif (is_page()) {

    } elseif (is_search()) {

    }
}