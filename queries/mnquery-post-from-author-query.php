<?php
defined('ABSPATH') || exit;
function home_query()
{
    if (is_home()) {
        // james start
        $args = array(
            'author' => array(
                'relation' => 'AND',
                array(
                    'key' => 'user_active_status',
                    'value' => 'yes',
                    'compare' => '=',
                ),
                array(
                    'key' => 'role',
                    'value' => 'editor',
                    'compare' => '=',
                ),
            ),
            'posts_per_page' => 1,
        );
        $query = new WP_User_Query($args);
        $authors = $query->get_results();
        // james end
        if (!empty($authors)) {
            foreach ($authors as $author) {
                $args = array(
                    'author' => $author->ID,
                    'posts_per_page' => 1,
                    'orderby' => 'author',
                    'order' => 'rand',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $post_id = get_the_ID();
                        $title = get_the_title();
                        // get the author role
                        // $author_role = get_the_author_meta('role', $author_id); not working
                        $author_role = get_user_meta($author_id, 'role', true);
                        $permalink = get_the_permalink();
                        
                        $post_author_id = get_post_field('post_author', $post_id); // Get the post author ID
                        $user_data = get_userdata($post_author_id);
                        $author_role = $user_data->roles[0];

                        if ($author_role == 'editor') {

                            echo '<div class="homeContColPostItem">';
                            echo '<div class="homeContColPostItemLeft">';
                            echo '<a href="' . $permalink . '">';
                            echo mncore_custom_featured_image(true);
                            echo '</a>';
                            echo '</div>';
                            echo '<div class="homeContColPostItemRight">';
                            echo '<h3><a href="' . $permalink . '">' . $title . '</a></h3>';
                            echo '<div class="homeTagWr">';
                            echo '<span class="homeTagsItemsWr">';
                            echo mnuser_logo_and_name();
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                        }



                        
                    }
                } else {
                    // do nothing
                }
                wp_reset_postdata();
            }
        }
    }
}
