<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mn_theme_options');
function mn_theme_options()
{
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
            // logo
            Field::make('image', 'company_logo_mn', 'Logo')
                ->set_value_type('url'),
            // nama perusahaan
            Field::make('text', 'company_name_mn', 'Company Name'),
            // alamat
            Field::make('textarea', 'company_address_mn', 'Address'),
            // kota
            Field::make('text', 'company_city_mn', 'City'),
            // provinsi
            Field::make('text', 'company_province_mn', 'Province'),
            // kode pos
            Field::make('text', 'company_postal_code_mn', 'Postal Code'),
            // negara
            Field::make('text', 'company_country_mn', 'Country'),
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
            // tiktok
            Field::make('text', 'website_tiktok_mn', 'Tiktok')
                ->set_help_text('masukan url tiktok dengan format: https://www.tiktok.com/username'),
            // customer services
            Field::make('complex', 'customer_services_mn', 'Customer Services')
                ->set_help_text('<b>salahsatu dari 3 kolom (<span style="color: red;">telepon</span>, <span style="color: green;">whatsapp</span> atau <span style="color: blue;">email</span>) <span style="text-transform: uppercase; color: red;">WAJIB</span> diisi</b> untuk menampilkan customer service online')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('checkbox', 'customer_service_status_mn', 'Status')
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
    Container::make('theme_options', 'API & Tracking Setting')
        ->set_page_parent($theme_options)
        ->add_fields([
            // google site verification
            Field::make('text', 'goolge_site_verification_mn', 'Google Site Verification')
                ->set_classes('googleSiteVer'),
            // google map api
            Field::make('text', 'google_map_api_mn', 'Google Map API'),
            // facebook app id
            Field::make('text', 'facebook_app_id_mn', 'Facebook App ID'),
            // bing site verification
            Field::make('text', 'bing_site_verification_mn', 'Bing Site Verification')
                ->set_help_text('masukan kode bing site verification')
                ->set_classes('bingSiteVer'),
            // yandex site verification
            Field::make('text', 'yandex_site_verification_mn', 'Yandex Site Verification'),
            // option google analytics or google tag manager
            Field::make('select', 'google_tracking_anaytic_option_mn', 'Pilih salah satu')
                ->set_help_text('pilih salah satu untuk menampilkan google analytics atau google tag manager')
                ->add_options([
                    'pilih' => 'Pilih salah satu',
                    'google_analytics' => 'Google Analytics',
                    'google_tag_manager' => 'Google Tag Manager',
                ]),
            // if google analytics
            Field::make('textarea', 'google_analytics_mn', 'Google Analytics')
                ->set_help_text('masukan script google analytics')
                ->set_conditional_logic([
                    [
                        'field' => 'google_tracking_anaytic_option_mn',
                        'value' => 'google_analytics',
                    ]
                ]),
            // if google tag manager
            // field google tag manager head
            Field::make('textarea', 'google_tag_manager_head_mn', 'Google Tag Manager Head')
                ->set_help_text('masukan script google tag manager head')
                ->set_conditional_logic([
                    [
                        'field' => 'google_tracking_anaytic_option_mn',
                        'value' => 'google_tag_manager',
                    ]
                ]),
            // field google tag manager body
            Field::make('textarea', 'google_tag_manager_body_mn', 'Google Tag Manager Body')
                ->set_help_text('masukan script google tag manager body')
                ->set_conditional_logic([
                    [
                        'field' => 'google_tracking_anaytic_option_mn',
                        'value' => 'google_tag_manager',
                    ]
                ]),

        ]);

    // SINGLE POST OPTIONS
    Container::make('theme_options', 'Single Post Options')
        ->set_page_parent($theme_options)
        ->add_fields([
            // enable disable fallback featured image
            Field::make('checkbox', 'enable_disable_fallback_featured_image_mn', 'Enable/Disable Fallback Featured Image')
                ->set_help_text('pilih untuk mengaktifkan, fungsi: Jika tidak ada featured image maka akan menampilkan gambar ini'),
            // fallback featured image
            Field::make('image', 'fallback_featured_image_mn', 'Fallback Featured Image')
                ->set_required(true)
                ->set_value_type('url')
                ->set_help_text('Jika tidak ada featured image maka akan menampilkan gambar ini')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_disable_fallback_featured_image_mn',
                        'value' => true,
                    ]
                ]),
            // enable disable author box
            Field::make('checkbox', 'enable_disable_author_box_mn', 'Enable/Disable Author Box')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk menampilkan author box'),


            // enable disable associated post
            Field::make('checkbox', 'enable_disable_associated_post_mn', 'Enable/Disable Associated Post')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk menampilkan associated post, yaitu mirip seperti related post tetapi post yang ditampilkan berdasarkan pilihan manual'),

        ]);

    // HOMEPAGE OPTIONS
    Container::make('theme_options', 'Homepage Options')
        ->set_page_parent($theme_options)
        ->add_fields([
            // checkbox aktifkan infinite scroll option
            Field::make('checkbox', 'enable_disable_infinite_scroll_mn', 'Enable/Disable Infinite Scroll')
                ->set_help_text('pilih untuk mengaktifkan infinite scroll'),
        ]);
    // PAGE OPTIONS
    Container::make('theme_options', 'Page Options')
        ->set_page_parent($theme_options)
        ->add_fields([]);

    // TAG OPTIONS
    Container::make('theme_options', 'Tag Page Options')
        ->set_page_parent($theme_options)
        ->add_fields([]);

    // AUTHOR OPTIONS
    Container::make('theme_options', 'Author Options')
        ->set_page_parent($theme_options)
        ->add_fields([]);

    // ADS OPTIONS
    Container::make('theme_options', 'Ads Options')
        ->set_page_parent($theme_options)
        ->add_fields([
            // google adsense code verification
            Field::make('text', 'google_adsense_code_verification_mn', 'Google Adsense CA Pub')
                ->set_help_text('masukan Google Adsense contoh: ca-pub-7273106919945417'),
            // ads header
            Field::make('textarea', 'ads_header_mn', 'Ads Header')
                ->set_help_text('masukan kode adsense untuk menampilkan di header'),
            // ads footer
            Field::make('textarea', 'ads_footer_mn', 'Ads Footer')
                ->set_help_text('masukan kode adsense untuk menampilkan di footer'),




            Field::make('separator', 'adsinseps', 'Ads In Content Shortcode')
                ->set_classes('cbseperator')
                ->set_help_text('Ads In Content Shortcode, klik untuk mengaktifkan setiap ads, cara pakai dengan cara mengetikan shortcode contoh: [ads] atau [ads2] dst. <span class="redbold">TIPS: pastikan untuk memasukan SLOT ID yang berbeda-beda untuk setiap ads untuk menampilkan ads yang berbeda. Dan pastikan juga Anda membuat ads dengan tipe in article ads (BUKAN DISPLAY, FEED)'),

            // ads inline article shortcode
            // checkbox enable disable ads inline article


            // Ads inline shortcode 1

            Field::make('checkbox', 'enable_ads_inline_shortcode_in_article_option', 'Enable/Disable Ads Inline Article 1')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads inline article'),

            // ads slot id
            Field::make('text', 'ads_slot_id_mn', 'Ads Slot ID')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-727xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3029550843, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_inline_shortcode_in_article_option',
                        'value' => true,
                    ]
                ]),

            // Ads inline shortcode 2

            Field::make('checkbox', 'enable_ads_inline_shortcode_in_article_option_2', 'Enable/Disable Ads Inline Article 2')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads inline article'),

            // ads slot id 2
            Field::make('text', 'ads_slot_id_2_mn', 'Ads Slot ID')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-727xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3029550843, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_inline_shortcode_in_article_option_2',
                        'value' => true,
                    ]
                ]),

            // Ads inline shortcode 3

            Field::make('checkbox', 'enable_ads_inline_shortcode_in_article_option_3', 'Enable/Disable Ads Inline Article 3')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads inline article'),

            // ads slot id 3
            Field::make('text', 'ads_slot_id_3_mn', 'Ads Slot ID')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-737xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3039550843, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_inline_shortcode_in_article_option_3',
                        'value' => true,
                    ]
                ]),

            // Ads inline shortcode 4

            Field::make('checkbox', 'enable_ads_inline_shortcode_in_article_option_4', 'Enable/Disable Ads Inline Article 4')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads inline article'),

            // ads slot id 4
            Field::make('text', 'ads_slot_id_4_mn', 'Ads Slot ID')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-747xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 4049550844, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_inline_shortcode_in_article_option_4',
                        'value' => true,
                    ]
                ]),

            // Ads inline shortcode 5

            Field::make('checkbox', 'enable_ads_inline_shortcode_in_article_option_5', 'Enable/Disable Ads Inline Article 5')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads inline article'),

            // ads slot id 5
            Field::make('text', 'ads_slot_id_5_mn', 'Ads Slot ID')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-757xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 505955085, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_inline_shortcode_in_article_option_5',
                        'value' => true,
                    ]
                ]),


            Field::make('separator', 'adsaftercontentsep', 'Ads After Content')
                ->set_classes('cbseperator')
                ->set_help_text('Ads After Content adalah menampilkan kotak iklan yang tampil di satu row berisi dua kolom kiri dan kanan pada perangkan selain tablet dan diperangkat tablet - mobile 2 row dengan 1 kolom atas dan bawah.'),

            // ads after content, there 2 columns left and right
            // checkbox enable disable ads after content
            Field::make('checkbox', 'enable_ads_after_content_option', 'Enable/Disable Google Adsense After Content')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ads after content'),

            // ads after content left
            Field::make('text', 'ads_after_content_left_mn', 'Ads Slot After Content Left/Top Side')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-727xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3029550843')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_after_content_option',
                        'value' => true,
                    ]
                ]),

            // ads after content right
            Field::make('text', 'ads_after_content_right_mn', 'Ads After Content Right/Top')
                ->set_help_text('<span class="redbold">NOTE: PASTIKAN SUDAH INPUT CODE ca-pub-727xxxxx</span> diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3029550843')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_after_content_option',
                        'value' => true,
                    ]
                ]),



            Field::make('separator', 'adsmultiplesep', 'Multiple Ads Show di Area Paling Bawah Post')
                ->set_classes('cbseperator')
                ->set_help_text('Multiple Ads Show di Area Paling Bawah Post adalah menampilkan kotak iklan yang tampil dengan layout grid jadi seakan-akan iklan adalah post dari website'),


            Field::make('checkbox', 'enable_ads_very_bottom_multiplex_ads', 'Aktifkan Multiplex Ads')
                ->set_option_value('yes'),
            Field::make('text', 'ads_very_bottom_multiplex_ads_1', 'Ads Slot ID Multiple Ads')
                ->set_help_text('PASTIKAN SUDAH INPUT CODE ca-pub-737xxxxx diatas terlebih dahulu sebelum memasukan ad-slot, isi ad-slot dibawah ketikan hanya angka misal: 3039550843, Cara menggunakannya cukup ketikan shortcode [ads] didalam artikel Anda.')
                ->set_attribute('type', 'number')
                ->set_conditional_logic([
                    [
                        'field' => 'enable_ads_very_bottom_multiplex_ads',
                        'value' => true,
                    ]
                ]),


        ]);
    // FOOTER OPTIONS
    Container::make('theme_options', 'Footer Options')
        ->set_page_parent($theme_options)
        ->add_fields([]);

    // PLUGINS OPTIONS
    Container::make('theme_options', 'Plugin Options')
        ->set_page_parent($theme_options)
        ->add_fields([
            // enabling breadcrumbs
            Field::make('checkbox', 'enabling_breadcrumbs_mn', 'Enabling Breadcrumbs')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan breadcrumbs'),
            // enbling builtin seo options
            Field::make('checkbox', 'enabling_builtin_seo_options_mn', 'Enabling Builtin SEO Options')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan builtin seo options sehingga Anda tidak perlu menggunakan plugin seo lagi'),
            // disable gutenburg
            Field::make('checkbox', 'disable_gutenburg_mn', 'Disable Gutenburg')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk menonaktifkan gutenburg'),

            // enabling auto alt and title image in post
            Field::make('checkbox', 'enabling_auto_alt_and_title_image_in_post_mn', 'Enabling Auto Alt and Title Image in Post')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan auto alt and title image in post, Fungsi: jika seorang user upload gambar maka secara otomatis akan di tambahkan alt dan title gambar tersebut'),

            // remove website field from comment form
            Field::make('checkbox', 'remove_website_field_from_comment_form_mn', 'Remove Website Field From Comment Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk menghapus website field dari comment form'),



            // enabling ferboden register

        ]);




    // security options
    Container::make('theme_options', 'Security Options')
        ->set_page_parent($theme_options)
        ->add_fields([
            // option to enabline recaptcha
            Field::make('checkbox', 'enabling_recaptcha_mn', 'Enabling Recaptcha')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha'),

            // recaptcha site key
            Field::make('text', 'recaptcha_site_key_mn', 'Recaptcha Site Key')
                ->set_required(true)
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),
            // recaptcha secret key
            Field::make('text', 'recaptcha_secret_key_mn', 'Recaptcha Secret Key')
                ->set_required(true)
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            //option to enabling recaptcha on login form
            Field::make('checkbox', 'enabling_recaptcha_on_login_form_mn', 'Enabling Recaptcha On Login Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha pada form login')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            // option to enabling recaptcha on register form
            Field::make('checkbox', 'enabling_recaptcha_on_register_form_mn', 'Enabling Recaptcha On Register Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha pada form register')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            // option to enabling recaptcha on comment form
            Field::make('checkbox', 'enabling_recaptcha_on_comment_form_mn', 'Enabling Recaptcha On Comment Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha pada form comment')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            // option to enabling recaptcha on lost password form
            Field::make('checkbox', 'enabling_recaptcha_on_lost_password_form_mn', 'Enabling Recaptcha On Lost Password Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha pada form lost password')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            // option to enabling recaptcha on reset password form
            Field::make('checkbox', 'enabling_recaptcha_on_reset_password_form_mn', 'Enabling Recaptcha On Reset Password Form')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan recaptcha pada form reset password')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_recaptcha_mn',
                        'value' => true,
                    ]
                ]),

            // enabling limit login attempts
            Field::make('checkbox', 'enabling_limit_login_attempts_mn', 'Enabling Limit Login Attempts')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan limit login attempts'),
            // enabling ferboden login
            Field::make('checkbox', 'enabling_ferboden_login_mn', 'Enabling Ferboden Login')
                ->set_option_value('yes')
                ->set_help_text('pilih untuk mengaktifkan ferboden login, Fungsi: jika seorang user mencoba login dengan username yang tertera didalam list maka akan secara otomatis akan di blokir dan tidak bisa mengunjungi website ini'),
            // list ferboden login
            Field::make('textarea', 'list_ferboden_login_mn', 'List Ferboden Login')
                ->set_help_text('masukan list username yang tidak boleh login dipisahkan dengan koma (,), contoh: admin,administrator,root,superadmin,superuser,Admin,Administrator,Root,Superadmin,Superuser')
                ->set_default_value('admin,administrator,root,superadmin,superuser,Admin,Administrator,Root,Superadmin,Superuser')
                ->set_conditional_logic([
                    [
                        'field' => 'enabling_ferboden_login_mn',
                        'value' => true,
                    ]
                ]),

        ]);

    // sub option end




}
