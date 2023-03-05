<?php
defined('ABSPATH') || exit;

function mncore_is_editor_role()
{
    $authorID = mncore_authorID();
    $userRole = get_the_author_meta('roles', $authorID)[0];
    if ($userRole == 'editor') {
        $status = true;
        return $status;
    } else {
        $status = false;
        return $status;
    }
}