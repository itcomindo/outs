<?php
defined('ABSPATH') || exit;
get_header();
?>
<section id="catPr" class="section globalSection">
    <div class="container">
        <div class="catRowOne">
            <!-- php echo category name -->
            <?php
            $catName = single_cat_title('', false);
            echo "<h1 class='catName'>$catName</h1>";
            ?>
        </div>
        <div class="catRowTwo">
            <?php echo mnqu_show_global_query('category', 15, 'Category', 'card') ?>
        </div>
    </div>
</section>
<?php
get_footer();
