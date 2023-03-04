<?php
defined('ABSPATH') || exit;
get_header();
?>
<section id="catPr" class="section globalSection">
    <div class="container">
        <div class="catRowOne">
            <!-- php echo category name -->
            <?php
            if (has_category('journal')) {
                $catName = single_cat_title('', false);
                echo '<h1 class="globalPostTitle">' . $catName . '</h1>';
                echo '<p>Artikel-artikel tentang ' . $catName . ' semoga bermanfaat untuk Anda semua.</p>';
            } else {
            $catName = single_cat_title('', false);
            echo '<h1 class="globalPostTitle">Nama dan Penawaran Perusahaan Outsourcing di ' . $catName . '</h1>';
            echo '<p>Temukan penawaran-penawaran terbaik dari perusahaan outsourcing yang beralamat atau bertugas di ' . $catName . '. </p>
            <small>Mohon untuk menyimak halaman disclaimer kami sebelum berinteraksi dengan para perusahaan yang ditampilkan disini.</small>';
            }
            ?>
        </div>
        <div class="catRowTwo">
            <?php
            if (has_category('journal')) {
                echo mnqu_show_global_query('category', 15, 'Artikel', 'card');
            } else {

                echo mnqu_show_global_query('category', 15, 'Penawaran', 'card');
            }
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
