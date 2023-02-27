<?php
defined('ABSPATH') || exit;

function mnel_show_sidebar_head($class = "globalSidebarHeadWr", $title = "Sidebar Head")
{
?>
    <div class="<?php echo $class; ?>">
        <h3 class="globalSidebarHead">
            <?php echo $title; ?>
        </h3>
    </div>
<?php
}
