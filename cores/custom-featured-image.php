<?php
defined('ABSPATH') || exit;
function mncore_custom_featured_image() {
    $authorID = mncore_authorID();
    $userRole = get_the_author_meta('roles', $authorID)[0];

    if ($userRole == 'editor') {
        $folder = get_the_author_meta('user_login', $authorID);
        $extension = 'webp';
        // browse folder vertical-blinds in wordpress uploads
        $dir = wp_upload_dir();
        $dir = $dir['basedir'] . '/' . $folder;
        // get all files with extension in folder vertical-blinds
        $files = glob($dir . '/*.' . $extension);
        // randomize files
        shuffle($files);
        $files = array_slice($files, 0, 1);
        $custom_featured_image_mn = wp_upload_dir()['baseurl'] . '/' . $folder . $files[0];
        $custom_featured_image_mn = str_replace($dir, '', $custom_featured_image_mn);
        // make this as featured image and create thumbnail srcset
        $custom_featured_image_mn = '<div class="globalPostFeaturedImage"><img class="globalFeaturedImage' . $class . '" src="' . $custom_featured_image_mn . '" alt="' . get_the_title() . '" title="' . get_the_title() . '" /></div>';

        return $custom_featured_image_mn;

    } else {
        echo mnel_show_featured_image();
    }

    

}