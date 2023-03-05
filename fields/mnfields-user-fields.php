<?php
defined('ABSPATH') || exit;
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action('carbon_fields_register_fields', 'user_fields_mn');
function user_fields_mn() {
    Container::make('user_meta', 'User Meta Custom')
    ->add_fields([
        // checkbox active or inactive
        Field::make('checkbox', 'is_active_user', 'Active or Inactive'),
        // nama
        Field::make('text', 'nama_perusahaan_user', 'Nama'),
        // logo image
        Field::make('image', 'logo_image_user', 'Logo Image')
        ->set_value_type('url'),
        // text area alamat
        Field::make('textarea', 'alamat_user', 'Alamat'),
        // kota
        Field::make('text', 'kota_user', '')
        ->set_help_text('Kota')
        ->set_attribute('placeholder', 'Kota')
        ->set_width(33),
        // provinsi
        Field::make('text', 'provinsi_user', '')
        ->set_help_text('Provinsi')
        ->set_attribute('placeholder', 'Provinsi')
        ->set_width(33),
        // kode pos
        Field::make('text', 'kode_pos_user', '')
        ->set_help_text('Kode Pos')
        ->set_attribute('placeholder', 'Kode Pos')
        ->set_width(33),
        // website url
        Field::make('text', 'website_url_user', 'Website Url'),
        // phone number
        Field::make('text', 'phone_number_user', '')
        ->set_help_text('Phone Number')
        ->set_width(50),

        // email
        Field::make('text', 'email_perusahaan_user', '')
        ->set_attribute('placeholder', 'Email')
        ->set_help_text('Email')
        ->set_width(50),
        // business type
        Field::make('text', 'business_type_user', 'Business Type')
        ->set_default_value('EmploymentAgency'),
        // description
        Field::make('textarea', 'description_user', 'Description')
        ->set_default_value('merupakan perusahaan outsourcing yang bergerak dibidang penyediaan tenaga kerja pengamanan, bodyguard, office boy, cleaning service, dan lain-lain. Menerima penyaluran tenaga kerja ke seluruh Indonesia.'),
    ]);

}