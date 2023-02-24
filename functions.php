<?php
defined('ABSPATH') || exit;


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
/**
 * ========================================================
 * ? carbon fields google map api key start
 *  ! enabling this if google map is enable
 * ========================================================
*/

// add_filter('carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key');
function crb_get_gmaps_api_key($key)
{
    $google_map_api_key = carbon_get_theme_option('google_map_api_key');
    return $google_map_api_key;
}
// google map api key end =======

/**
 * ========================================================
 * !remove default wp head tag
 * start
 * ========================================================
 */
remove_action('wp_head', '_wp_render_title_tag', 1);

// remover default wp head tag end =======
/**
 * ! Load any theme supports
 */
// Add support for menus
add_theme_support('menus');
// Add support for post thumbnails
add_theme_support('post-thumbnails');
// add support for title tag
add_theme_support('title-tag');
// add support widgets
add_theme_support('widgets');

// Include admin
include get_template_directory() . '/admin/admin.php';

// include ads
include get_template_directory() . '/ads/ads.php';

// include css
include get_template_directory() . '/css/css.php';

// include cores
include get_template_directory() . '/cores/cores.php';


// include js
include get_template_directory() . '/js/js.php';

// include elements
include get_template_directory() . '/elements/elements.php';

// include fields
include get_template_directory() . '/fields/fields.php';

// include filters
include get_template_directory() . '/filters/filters.php';

// incluede forms
include get_template_directory() . '/forms/forms.php';

// include menus
include get_template_directory() . '/menus/menus.php';

// include options
include get_template_directory() . '/options/options.php';

// include plugins
include get_template_directory() . '/plugins/plugins.php';

// include queries
include get_template_directory() . '/queries/queries.php';

// include template-parts
include get_template_directory() . '/template-parts/template-parts.php';

// include users
include get_template_directory() . '/users/users.php';

// include widgets
include get_template_directory() . '/widgets/widgets.php';

// include shortcodes
include get_template_directory() . '/shortcodes/shortcodes.php';

// include security
include get_template_directory() . '/security/security.php';