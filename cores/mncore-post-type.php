<?php
defined('ABSPATH') || exit;

function mncore_is_journal()
{
    if (has_category('journal')) {
        $isJournal = true;
    }
    return $isJournal;
}
