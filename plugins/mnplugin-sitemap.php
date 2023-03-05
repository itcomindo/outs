<?php
defined('ABSPATH') || exit;
function posts_tags_sitemap_generator()
{
    $post_types = array('post'); // Specify post types you want to include in sitemap
    $freq = 'weekly'; // Set the changefreq to weekly
    $priority = 0.8; // Set the priority to 0.8
    $max_posts_per_sitemap = 100; // Maximum number of posts per sitemap
    $max_tags_per_sitemap = 200; // Maximum number of tags per sitemap
    $post_filename_prefix = 'posts-sitemap-'; // Prefix for post sitemap filenames
    $tag_filename_prefix = 'tags-sitemap-'; // Prefix for tag sitemap filenames
    $filename_suffix = '.xml'; // Suffix for sitemap filenames

    // Get all published posts
    $posts = get_posts(array(
        'post_type' => $post_types,
        'post_status' => 'publish',
        'orderby' => 'modified',
        'order' => 'DESC',
        'numberposts' => -1
    ));

    // Split posts into groups of $max_posts_per_sitemap
    $post_groups = array_chunk($posts, $max_posts_per_sitemap);

    // Loop through post groups and generate post sitemap files
    $post_sitemap_number = 1;
    foreach ($post_groups as $post_group) {
        // $filename = ABSPATH . $post_filename_prefix . $post_sitemap_number . $filename_suffix; // Set sitemap filename and path
        // store all sitemaps in folder sitemap
        $filename = ABSPATH . 'sitemap/' . $post_filename_prefix . $post_sitemap_number . $filename_suffix; // Set sitemap filename and path

        // Start sitemap content
        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Array to keep track of URLs that have already been added to the sitemap
        $added_urls = array();

        // Loop through posts in group and add URLs to sitemap
        foreach ($post_group as $post) {
            $url = get_permalink($post->ID);

            // Skip this URL if it has already been added to the sitemap
            if (in_array($url, $added_urls)) {
                continue;
            }

            // Add this URL to the array of added URLs
            $added_urls[] = $url;

            $postdate = explode(" ", $post->post_date);
            $postmodified = explode(" ", $post->post_modified);
            $content .= '<url>' . "\n";
            $content .= '<loc>' . $url . '</loc>' . "\n";
            $content .= '<lastmod>' . $postmodified[0] . 'T' . $postmodified[1] . '+00:00' . '</lastmod>' . "\n";
            $content .= '<changefreq>' . $freq . '</changefreq>' . "\n";
            $content .= '<priority>' . $priority . '</priority>' . "\n";
            $content .= '</url>' . "\n";
        }

        // End sitemap content
        $content .= '</urlset>' . "\n";

        // Save sitemap to file
        if (file_exists($filename)) {
            unlink($filename); // Delete existing file
        }
        file_put_contents($filename, $content);

        $post_sitemap_number++;
    }

    // Get all tags
    $tags = get_terms(array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,

    ));

    // Split tags into groups of $max_tags_per_sitemap
    $tag_groups = array_chunk($tags, $max_tags_per_sitemap);

    // Loop through tag groups and generate tag sitemap files
    $tag_sitemap_number = 1;
    foreach ($tag_groups as $tag_group) {
        // $filename = ABSPATH . $tag_filename_prefix . $tag_sitemap_number . $filename_suffix; // Set sitemap filename and path
        // store all sitemaps in folder sitemap
        $filename = ABSPATH . 'sitemap/' . $tag_filename_prefix . $tag_sitemap_number . $filename_suffix; // Set sitemap filename and path
        // Start sitemap content
        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Array to keep track of URLs that have already been added to the sitemap
        $added_urls = array();

        // Loop through tags in group and add URLs to sitemap
        foreach ($tag_group as $tag) {
            $url = get_tag_link($tag->term_id);

            // Skip this URL if it has already been added to the sitemap
            if (in_array($url, $added_urls)) {
                continue;
            }

            // Add this URL to the array of added URLs
            $added_urls[] = $url;

            $content .= '<url>' . "\n";
            $content .= '<loc>' . $url . '</loc>' . "\n";
            $content .= '<changefreq>' . $freq . '</changefreq>' . "\n";
            $content .= '<priority>' . $priority . '</priority>' . "\n";
            $content .= '</url>' . "\n";
        }

        // End sitemap content
        $content .= '</urlset>' . "\n";

        // Save sitemap to file
        if (file_exists($filename)) {
            unlink($filename); // Delete existing file
        }
        file_put_contents($filename, $content);

        $tag_sitemap_number++;
    }
}

add_action('publish_post', 'posts_tags_sitemap_generator'); // Regenerate sitemap when a new post is published
add_action('edit_post', 'posts_tags_sitemap_generator'); // Regenerate sitemap when a post is edited
add_action('delete_post', 'posts_tags_sitemap_generator'); // Regenerate sitemap when a post is deleted