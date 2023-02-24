<?php
defined('ABSPATH') || exit;
/**
 * Get tagID from tag
 */
function mn_tagID()
{
    $tagID = get_queried_object_id();
    return $tagID;
}
