<?php
defined('ABSPATH') || exit;
get_header();
?>


<section class="globalSection section" id="singlePr">
    <div class="container">
        <!-- single wr start -->
        <?php
        if (has_category('journal')) {
            mntp_show_content_for_journal();
        } else {
            echo mntp_show_content_for_user();
        }
        ?>

        <!-- single wr end -->
    </div>
</section>

<?php
if (!has_category('journal')) {
    echo mnel_show_chatbox();
}
get_footer();
