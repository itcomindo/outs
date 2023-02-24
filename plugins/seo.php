<?php
defined('ABSPATH') || exit;

function mn_seo()
{
    $blogTitle = get_bloginfo('name');
    $description = get_bloginfo('description');
    if (is_single()) {
        $title = get_the_title();
        $description = $title . ' ' . mn_excerpt();
        $count = strlen($description);
        if ($count > 160) {
            $description = substr($description, 0, 160);
        }
        $robots = 'index, follow';
    } elseif (is_page()) {
        $title = get_the_title();
        $description = $title . ' ' . mn_excerpt();
        $count = strlen($description);
        if ($count > 160) {
            $description = substr($description, 0, 160);
        }
        $robots = 'index, follow';
    } elseif (is_category()) {
        $title = get_the_category();
        $title = $title[0]->name;
        $description = $title . ' ' . get_bloginfo('description');
        $robots = 'index, follow';
    } elseif (is_tag()) {
        $title = get_the_tags();
        $title = $title[0]->name;
        $description = $title . ' ' . get_bloginfo('description');
    } elseif (is_author()) {
        $authorID = mn_authorID();
        $title = get_the_author_meta('nickname', $authorID);
        $description = $title . ' ' . get_bloginfo('description');

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
    } ?>
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="robots" content="<?php echo $robots; ?>">
<?php
}


