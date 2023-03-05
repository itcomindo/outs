<?php
defined('ABSPATH') || exit;
function mnel_show_nama_perusahaan($link, $class = 'globalNamaPerusahaan')
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
    } elseif (is_tag()) {
        if ($link) {
            $postID = mncore_get_post_id_in_tag();
            $authorID = get_post_field('post_author', $postID);
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $authorLink = get_author_posts_url($authorID);
            $theAuthor = '<a class="globalAuthorLink" title="' . $namaPerusahaan . '" href="' . $authorLink . '">' . $namaPerusahaan . '</a>';
            return $theAuthor;
        } else {
            $postID = mncore_get_post_id_in_tag();
            $authorID = get_post_field('post_author', $postID);
            $namaPerusahaan = carbon_get_user_meta($authorID, 'nama_perusahaan_user');
            $theAuthor = '<span class="' . $class . '">' . $namaPerusahaan . '</span>';
            return $theAuthor;
        }
    } elseif (is_page()) {
        // wait
    } elseif (is_search()) {
        // wait
    }
}