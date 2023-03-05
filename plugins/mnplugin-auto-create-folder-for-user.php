<?php
defined('ABSPATH') || exit;
/**
* Auto Create Folder For User After Registration
* Folder location: wp-content/uploads/
* Folder name: as user name login
*/



function create_user_folder($user_id)
{
    $user = get_userdata($user_id);
    $user_login = $user->user_login;
    $upload_dir = wp_upload_dir();
    $user_dirname = $upload_dir['basedir'] . '/' . $user_login;
    if (!is_dir($user_dirname)) {
        wp_mkdir_p($user_dirname);
    }
    // create index.php file in user folder
    $index_file = $user_dirname . '/index.php';
    if (!file_exists($index_file)) {
        $index_content = '<?php // Silence is golden';
        file_put_contents($index_file, $index_content);
    } else {
        // do nothing
    }
}
add_action('user_register', 'create_user_folder');