<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mnplugin_seo_fields()
{

    Container::make('post_meta', __('User Settings'))
        ->where('post_type', '=', 'post')
        ->or_where('post_type', '=', 'page')
        ->add_tab('SEO', array(
            Field::make('text', 'seo_title_mn', 'Title')
                ->set_attribute('placeholder', 'Ketikan Title')
                ->set_help_text('Ketikan Title, kalau kosong maka akan menggunakan title default'),
            Field::make('textarea', 'seo_description_mn', 'Description')
                ->set_attribute('placeholder', 'Ketikan Description maksimal 160 karakter')
                ->set_attribute('maxLength', '160')
                ->set_help_text('Ketikan Description maksimal 160 karakter, kalau kosong maka akan menggunakan post excerpt'),
            Field::make('select', 'seo_robots_mn', 'Robots')
                ->add_options(array(
                    'index, follow' => 'index, follow',
                    'noindex, follow' => 'noindex, follow',
                    'index, nofollow' => 'index, nofollow',
                    'noindex, nofollow' => 'noindex, nofollow',
                ))
                ->set_default_value('index, follow'),
        ))
        ->add_tab('Facebook', array(
            Field::make('text', 'facebook_title_mn', 'Facebook Title')
                ->set_attribute('placeholder', 'Ketikan Facebook Title')
                ->set_help_text('Ketikan Facebook Title, kalau kosong maka akan menggunakan title default'),
            Field::make('textarea', 'facebook_description_mn', 'Facebook Description')
                ->set_attribute('placeholder', 'Ketikan Facebook Description maksimal 160 karakter')
                ->set_attribute('maxLength', '160')
                ->set_help_text('Ketikan Facebook Description maksimal 160 karakter, kalau kosong maka akan menggunakan post excerpt'),
            // facebook image
            Field::make('image', 'facebook_image_mn', 'Facebook Image')
                ->set_value_type('url')
                ->set_help_text('ukuran disarankan: 1200 x 630 pixel, kalau kosong maka akan menggunakan featured image'),
        ))
        ->add_tab('Twitter', array(
            Field::make('text', 'twitter_title_mn', 'Twitter Title')
                ->set_attribute('placeholder', 'Ketikan Twitter Title')
                ->set_help_text('Ketikan Twitter Title, kalau kosong maka akan menggunakan title default'),
            Field::make('textarea', 'twitter_description_mn', 'Twitter Description')
                ->set_attribute('placeholder', 'Ketikan Twitter Description maksimal 160 karakter')
                ->set_attribute('maxLength', '160')
                ->set_help_text('Ketikan Twitter Description maksimal 160 karakter, kalau kosong maka akan menggunakan post excerpt'),
            // twitter image
            Field::make('image', 'twitter_image_mn', 'Twitter Image')
                ->set_value_type('url')
                ->set_help_text('ukuran disarankan: 1200 x 630 pixel, kalau kosong maka akan menggunakan featured image'),
        ));
}


function mnplug_show_seo()
{
    $blogTitle = get_bloginfo('name');
    $description = get_bloginfo('description');
    if (is_single()) {
        $title = mnel_show_custom_post_title();
        $description = $title . ' ' . mncore_excerpt();
        $count = strlen($description);
        if ($count > 160) {
            $description = substr($description, 0, 160);
        }
        $robots = 'index, follow';
    } elseif (is_page()) {
        $title = get_the_title();
        $description = $title . ' ' . mncore_excerpt();
        $count = strlen($description);
        if ($count > 160) {
            $description = substr($description, 0, 160);
        }
        $robots = 'index, follow';
    } elseif (is_category()) {
        $catID = mncore_catID();
        // get category name
        $title = get_cat_name($catID);
        $description = $title . ' ' . get_bloginfo('description') . ' yang beroperasi atau berkantor nomor telepon perusahaan yayasan agency biro penyalur penyedia outsourcing di ' . $title;
        $robots = 'index, follow';
    } elseif (is_tag()) {
        $title = get_the_tags();
        $title = $title[0]->name;
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'index, follow';
    } elseif (is_author()) {
        $authorID = mncore_authorID();
        $title = get_the_author_meta('nickname', $authorID);
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'index, follow';
    } elseif (is_search()) {
        $title = 'Search results for: ' . get_search_query();
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'noindex, nofollow';
    } elseif (is_404()) {
        $title = '404: Page not found';
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'noindex, nofollow';
    } elseif (is_home()) {
        $title = $blogTitle;
        $description = $description;
        $robots = 'index, follow';
    } elseif (is_page_template('template-parts/sitemap-page.php')) {
        $title = 'Sitemap';
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'noindex, nofollow';
    } else {
        // wait for update
    }
    ?>
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="robots" content="<?php echo $robots; ?>">
<?php
}
