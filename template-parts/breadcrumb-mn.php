<?php
defined('ABSPATH') || exit;

/**
 * Breadcrumb
 * only show on single post, page, category and tag
*/

function mntp_breadcrumb() {
    // get homepage url
    $home_url = home_url();
    if (is_single()) {
        $postTitle = get_the_title(mncore_postID());
        $category = get_the_category();
        $category_name = $category[0]->cat_name;
        $category_link = get_category_link($category[0]->cat_ID);
        $json = array(
            '@context' => 'http://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'item' => array(
                        '@id' => $home_url,
                        'name' => 'Home'
                    )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'item' => array(
                        '@id' => $category_link,
                        'name' => $category_name
                    )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 3,
                    'item' => array(
                        '@id' => get_permalink(),
                        'name' => $postTitle
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json) . '</script>';
    } elseif (is_page()) {
        $pageTitle = get_the_title(mncore_postID());
        $json = array(
            '@context' => 'http://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'item' => array(
                        '@id' => $home_url,
                        'name' => 'Home'
                    )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'item' => array(
                        '@id' => get_permalink(),
                        'name' => $pageTitle
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json) . '</script>';

    } elseif (is_category()) {
        $category = get_the_category();
        $category_name = $category[0]->cat_name;
        $json = array(
            '@context' => 'http://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'item' => array(
                        '@id' => $home_url,
                        'name' => 'Home'
                    )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'item' => array(
                        '@id' => get_permalink(),
                        'name' => $category_name
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json) . '</script>';

    } elseif (is_tag()) {
        $tag = get_the_tags();
        $tag_name = $tag[0]->name;
        $json = array(
            '@context' => 'http://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'item' => array(
                        '@id' => $home_url,
                        'name' => 'Home'
                    )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'item' => array(
                        '@id' => get_permalink(),
                        'name' => $tag_name
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json) . '</script>';

    }
}

add_action('wp_head', 'mntp_breadcrumb');