<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'local_business_fields');
function local_business_fields() {
    Container::make('post_meta', 'Local Business Fields')
    ->where('post_type', '=', 'post')
    ->where('post_term', '!=', array(
        'field' => 'slug',
        'value' => 'journal',
        'taxonomy' => 'category',
    ))
    ->add_fields([
        // alamat
        Field::make('textarea', 'lbalamat', 'Alamat'),
        // kota
        Field::make('text', 'lbkota', 'Kota'),
        // distrik
        Field::make('text', 'lbdistrik', 'Distrik'),
        // kodepos
        Field::make('text', 'lbkodepos', 'Kode Pos'),
    ]);
}