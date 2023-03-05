<?php
defined('ABSPATH') || exit;
function mntp_topbar()
{
?>
    <div id="topbar" class="section">
        <div class="container">
            <div class="topbarWr">
                <div class="topbarLeft topbarCol">
                    <small class="topbarDateWr">
                        <?php
                        echo date('l, F j, Y');
                        ?>
                    </small>
                </div>
                <div class="topbarMid topbarCol">
                    <?php echo mnmenu_show_topbar_menu(); ?>
                </div>
                <div class="topbarRight topbarCol">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php
}
