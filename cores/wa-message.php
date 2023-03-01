<?php
defined('ABSPATH') || exit;

function mncore_wa_message() {
    if (is_single()) {
        $message = get_the_title();
        // replace space with %20
        $message = str_replace(' ', '%20', $message);
        $message = 'hallo%20saya%20mau%20bertanya%20tentang%20*' . $message . '*%20mohon%20bantuannya%20terima%20kasih';
    } elseif (is_tag()) {
        $tagId = mncore_tagID();
        // get tag name
        $tagName = get_tag($tagId)->name;
        // replace space with %20
        $tagName = str_replace(' ', '%20', $tagName);
        $message = 'hallo%20saya%20mau%20bertanya%20tentang%20*' . $tagName . '*%20mohon%20bantuannya%20terima%20kasih';
    } elseif (is_author()) {
        $namaPerusahaan = carbon_get_user_meta(get_the_author_meta('ID'), 'nama_perusahaan_user');
        $namaPerusahaan = str_replace(' ', '%20', $namaPerusahaan);
        $message = 'hallo%20saya%20mau%20bertanya%20tentang%20' . $namaPerusahaan . '%20mohon%20bantuannya%20terima%20kasih';
    }
    return $message;
}