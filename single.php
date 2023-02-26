<?php
defined('ABSPATH') || exit;
get_header();
?>
<section class="globalSection section" id="singlePr">
    <div class="container">
        <?php
        echo mn_show_featured_image();
        $title = get_the_title();
        echo "<h1 class='globalPostTitle'>$title</h1>";
        echo mn_show_post_tags();
        echo mn_show_post_author(false);
        echo mn_show_post_date();
        echo mn_show_post_category();
        echo mn_show_comments_count();
        ?>
        <div class="theContent">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            } else {
                echo '<p>Sorry, no posts matched your criteria.</p>';
            }
            ?>
            <!-- show comment form -->
            <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
