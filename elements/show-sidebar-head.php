<?php
defined('ABSPATH') || exit;

/**
 * Show Sidebar Head
 * @param string $class  adalah class sidebar
 * @param string $title adalah judul sidebar
 * @param string $position  left | right default left
 */

function mnel_show_sidebar_head($class = "globalSidebarHeadWr", $title = "Sidebar Head", $position = "left")
{
?>
    <div class="<?php echo $class .' ' . $position ; ?>">
        <h3 class="globalSidebarHead">
            <?php echo $title; ?>
        </h3>
    </div>
<?php
}
