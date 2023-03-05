<?php
defined('ABSPATH') || exit;

function mnel_show_mobile_floating_buttons()
{
?>
    <div class="mobFloPr">
        <div id="toggleCloseShare" class="inactive"><i class="fa-regular fa-circle-xmark"></i></div>
        <div class="mobFloWr">

            <?php
            if (has_category('journal')) {
                echo mnel_show_mobile_floating_share();
            } else {
                echo mnel_show_mobile_floating_cta();
                echo mnel_show_mobile_floating_share();
            }
            ?>
            
        </div>
    </div>
<?php
}
?>