<?php
defined('ABSPATH') || exit;

function mnel_show_mobile_floating_cta()
{
?>
    <div id="mobFloCtaWr">
        <div>
            <a class="whatapp" title="Whatsapp" rel="noopener, nofollow" target="_blank" href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
        </div>
        <div>
            <a class="phone" title="Phone" rel="noopener, nofollow" target="_blank" href="#"><i class="fa-solid fa-square-phone"></i></a>
        </div>
        <div>
            <a class="web" title="Website" rel="noopener, nofollow" target="_blank" href="#"><i class="fa-solid fa-square-envelope"></i></a>
        </div>
        <div id="toggleOpenShare" class="active">
            <i class="fa-solid fa-ellipsis"></i>
        </div>
    </div>

<?php
}
?>