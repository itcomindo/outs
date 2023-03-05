<?php
defined('ABSPATH') || exit;

function mnqu_show_posts_from_author_query() {
    // if author role is editor
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $query = new WP_Query($args);
    // randomize all posts in the query then pick just 1 post to display
    $posts = $query->posts;
    shuffle($posts);
    $post = $posts[0];
    $title = $post->post_title;
    $permalink = get_the_permalink($post->ID);
    $content = $post->post_content;
    $excerpt = $post->post_excerpt;
    ?>
    <div class="homeContColPostItem">
        <h3><?php echo $title; ?></h3>
    </div>
    <?php
    

}