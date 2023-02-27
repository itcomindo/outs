<?php
defined('ABSPATH') || exit;

function convert_to_webp($file, $mime_type)
{
    if (imagewebp) {
        // Get the file path and name without the extension
        $path_parts = pathinfo($file);
        $new_file_path = $path_parts['dirname'] . '/' . $path_parts['filename'] . '.webp';

        // Create the WebP image
        switch ($mime_type) {
            case 'image/png':
                $image = imagecreatefrompng($file);
                break;
            case 'image/jpeg':
                $image = imagecreatefromjpeg($file);
                break;
            default:
                return false;
        }
        imagewebp($image, $new_file_path);

        // Return the new WebP file path
        return $new_file_path;
    }
    return false;
}

add_action('add_attachment', 'convert_attachment_to_webp');
function convert_attachment_to_webp($attachment_id)
{
    $attachment = get_post($attachment_id);
    $file = get_attached_file($attachment_id);
    $mime_type = get_post_mime_type($attachment);

    if ($mime_type === 'image/png' || $mime_type === 'image/jpeg') {
        $new_file_path = convert_to_webp($file, $mime_type);
        if ($new_file_path) {
            // Update the attachment with the new WebP file path
            update_attached_file($attachment_id, $new_file_path);
        }
    }
}
