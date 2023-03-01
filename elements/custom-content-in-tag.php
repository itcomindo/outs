<?php
defined('ABSPATH') || exit;

function mnel_show_content_in_tag() {
    $tagID = mncore_tagID();
    $args = array(
        'tag_id' => $tagID,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'rand',
        'order' => 'DESC',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        ?>
        <div class="theContent">

        
        <?php
        while ($query->have_posts()) {
            $query->the_post();
            
            the_content();
        }
        ?>
        </div>
        <?php
    }
}