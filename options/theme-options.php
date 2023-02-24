<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mn_theme_options');
function mn_theme_options() {
    $theme_options = Container::make('theme_options', __('Theme Options', 'mn'))
        ->add_fields([
            Field::make('text', 'mn_blog_title', __('Blog Title', 'mn')),
            Field::make('text', 'mn_blog_description', __('Blog Description', 'mn')),
        ]);

        // sub option start
        // DATA WEBSITE
        Container::make('theme_options', 'Data Admin Website')
        ->set_page_parent($theme_options)
        ->add_fields([
            // multiple phone number
            Field::make('text', 'multiple_phone_number_mn', 'Multiple Phone Number')
            ->set_help_text('masukan nomor telepon dengan pemisah koma (,) untuk menampilkan tombol telepon di halaman depan: contoh: 0812-3456-777, 0812-3456-888, 0812-3456-999'),
            // primary phone number
            Field::make('text', 'primary_phone_number_mn', 'Primary Phone Number')
            ->set_help_text('<span class="red bold">NOTE: masukan hanya 1 nomor saja</span> Untuk tombol telepon disejumlah halaman dimana hanya butuh satu nomor telepon'),
            // whatsapp number
            Field::make('text', 'whatsapp_number_mn', 'Primary Whatsapp Number')
            ->set_help_text('<span class="red bold">NOTE: masukan hanya 1 nomor saja</span> Untuk tombol whatsapp disejumlah halaman dimana hanya butuh satu nomor whatsapp'),
            // email
            Field::make('text', 'email_mn', 'Email')
            ->set_help_text('<span class="red bold">NOTE: masukan hanya 1 email saja</span>'),
            // social media
            // facebook
            Field::make('text', 'website_facebook_mn', 'Facebook')
            ->set_help_text('masukan url facebook dengan format: https://www.facebook.com/username'),
            // twitter
            Field::make('text', 'website_twitter_mn', 'Twitter')
            ->set_help_text('masukan url twitter dengan format: https://www.twitter.com/username'),
            // instagram
            Field::make('text', 'website_instagram_mn', 'Instagram')
            ->set_help_text('masukan url instagram dengan format: https://www.instagram.com/username'),
            // youtube
            Field::make('text', 'website_youtube_mn', 'Youtube')
            ->set_help_text('masukan url youtube dengan format: https://www.youtube.com/username'),
            // linkedin
            Field::make('text', 'website_linkedin_mn', 'Linkedin')
            ->set_help_text('masukan url linkedin dengan format: https://www.linkedin.com/username'),
            // customer services
            Field::make('complex', 'customer_services_mn', 'Customer Services')
            ->set_help_text('<b>salahsatu dari 3 kolom (<span style="color: red;">telepon</span>, <span style="color: green;">whatsapp</span> atau <span style="color: blue;">email</span>) <span style="text-transform: uppercase; color: red;">WAJIB</span> diisi</b> untuk menampilkan customer service online')
            ->set_layout('tabbed-horizontal')
            ->add_fields([
                Field::make('checkbox','customer_service_status_mn','Status')
                ->set_help_text('Check to active this customer service'),
                Field::make('image', 'customer_service_photo_mn', 'Photo')
                ->set_value_type('url')
                ->set_help_text('Kosongkan jika tidak ingin ditampilkan secara otomatis akan menampilkan icon user'),
                Field::make('text', 'customer_services_name_mn', 'Name')
                ->set_help_text('Kosongkan jika tidak ingin ditampilkan, jika kosong akan menampilkan nama CS 1, CS 2, dst'),
                Field::make('text', 'customer_services_phone_mn', 'Phone')
                ->set_help_text('Kosongkan jika tidak ingin ditampilkan'),
                Field::make('text', 'customer_services_whatsapp_mn', 'Whatsapp')
                ->set_help_text('Kosongkan jika tidak ingin ditampilkan'),
                Field::make('text', 'customer_services_email_mn', 'Email')
                ->set_help_text('Kosongkan jika tidak ingin ditampilkan'),
            ])
        ]);

        // API SETTING
        Container::make('theme_options', 'API Setting')
            ->set_page_parent($theme_options)
            ->add_fields([
                // google site verification
                Field::make('text', 'goolge_site_verification_mn', 'Google Site Verification'),
                // google map api
                Field::make('text', 'google_map_api_mn', 'Google Map API'),
                // facebook app id
                Field::make('text', 'facebook_app_id_mn', 'Facebook App ID'),
                // bing site verification
                Field::make('text', 'bing_site_verification_mn', 'Bing Site Verification'),
                // yandex site verification
                Field::make('text', 'yandex_site_verification_mn', 'Yandex Site Verification'),
                // recaptcha site key
                Field::make('text', 'recaptcha_site_key_mn', 'Recaptcha Site Key'),
                // recaptcha secret key
                Field::make('text', 'recaptcha_secret_key_mn', 'Recaptcha Secret Key')

            ]);

        // sub option end




}