<?php
    function mnjson_load_json() {
        if (is_single() || has_category('Jawa Tengah')) {
            include get_template_directory() . '/json/jateng.php';
        }
    }
    add_action('wp', 'mnjson_load_json');
?>