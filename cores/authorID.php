<?php
defined('ABSPATH') || exit;
/**
 * get author ID
 */
function mn_authorID()
{
    $authorID = get_the_author_meta('ID');
    return $authorID;
}