<?php
defined('ABSPATH') || exit;

function auto_create_featured_image() {
    // fajarmerahgroup is a directory name in uploads containing images with extension .webp
    // get all images .webp from fajarmerahgroup directory
    $images = glob(ABSPATH . 'wp-content/uploads/fajarmerahgroup/*.webp');
    // pick a random image
    $randomImage = $images[array_rand($images)];

    $category = array(
        'pt-fajarmerah-group' => 'pt-fajarmerah-group',
        'pt-garda-total-securindo' => 'pt-garda-total-securindo',
    );
    $postID = mncore_postID();
    $catSlug = get_the_category($postID)[0]->slug;

    // if postID contains category slug from $category array then create featured image from $randomImage to assigned to the post as featured image with no title and alt
    if (in_array($catSlug, $category)) {
        $upload_dir = wp_upload_dir();
        $image_data = file_get_contents($randomImage);
        $filename = basename($randomImage);
        if (wp_mkdir_p($upload_dir['path'])) {
            $file = $upload_dir['path'] . '/' . $filename;
        } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }
        file_put_contents($file, $image_data);
        $wp_filetype = wp_check_filetype($filename, null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name($filename),
            'post_content' => '',
            'post_status' => 'inherit',
        );
        $attach_id = wp_insert_attachment($attachment, $file, $postID);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata($attach_id, $file);
        $res1 = wp_update_attachment_metadata($attach_id, $attach_data);
        $res2 = set_post_thumbnail($postID, $attach_id);
    } else {
        return;
    }
}
add_action('save_post', 'auto_create_featured_image');


function auto_assigned_featured_image() {
    // create array of category slug pt-garda-total-securindo and pt-fajarmerah-group
    $category = array(
        'pt-fajarmerah-group' => 'pt-fajarmerah-group',
        'pt-garda-total-securindo' => 'pt-garda-total-securindo',
    );
    // fajarmerahgroup is a directory name in uploads containing images with extension .webp
    // get all images .webp from fajarmerahgroup directory then randomize the array then check if post with category slug from $category array then automatically assigned featured image to the post
    $images = glob(ABSPATH . 'wp-content/uploads/fajarmerahgroup/*.webp');
    shuffle($images);
    foreach ($images as $image) {
        $postID = mncore_postID();
        $catSlug = get_the_category($postID)[0]->slug;
        if (in_array($catSlug, $category)) {
            $upload_dir = wp_upload_dir();
            $image_data = file_get_contents($image);
            $filename = basename($image);
            if (wp_mkdir_p($upload_dir['path'])) {
                $file = $upload_dir['path'] . '/' . $filename;
            } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
            }
            file_put_contents($file, $image_data);
            $wp_filetype = wp_check_filetype($filename, null);
            $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => sanitize_file_name($filename),
                'post_content' => '',
                'post_status' => 'inherit',
            );
            $attach_id = wp_insert_attachment($attachment, $file, $postID);
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attach_data = wp_generate_attachment_metadata($attach_id, $file);
            $res1 = wp_update_attachment_metadata($attach_id, $attach_data);
            $res2 = set_post_thumbnail($postID, $attach_id);
        } else {
            return;
        }
    }
}
add_action('save_post', 'auto_assigned_featured_image');