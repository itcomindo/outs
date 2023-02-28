<?php
defined('ABSPATH') || exit;
/**
* Auto Create Folder For User After Registration
* Folder location: wp-content/uploads/
* Folder name: as user name login
*/

function mnplugin_auto_create_folder() {
    // after user registration create folder for user in uploads folder named as user login but check if folder already exists or not
    $user = wp_get_current_user();
    $user_login = $user->user_login;
    $upload_dir = wp_upload_dir();
    $user_dirname = $upload_dir['basedir'] . '/' . $user_login;
    // create index.php file in user folder fill with golde silence
    $index_file = $user_dirname . '/index.php';
    if (!file_exists($user_dirname)) {
        mkdir($user_dirname, 0755, true);
        file_put_contents($index_file, '<?php // Silence is golden');
    } else {
        // if folder exists check if index.php file exists or not
        if (!file_exists($index_file)) {
            file_put_contents($index_file, '<?php // Silence is golden');
        }
    }

}

add_action('user_register', 'mnplugin_auto_create_folder');