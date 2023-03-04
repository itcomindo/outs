<?php
defined('ABSPATH') || exit;

function mnads_home_afer_header_menu()
{
?>
    <div id="adsHAMPr" class="active">
        <div class="adsToggleCloseOpenWr">
            <div id="toggleCloseAdsHAM" class="active">Close</div>
            <div id="toggleOpenAdsHAM" class="inactive">Show</div>
        </div>
        <div class="adsHomeAfterMenuWr">

            <div class="adsHAMLeft">
                <a title="iklan" href="#">
                    <img width="80" height="80" src="/wp-content/uploads/2023/03/fmg-150x150-1.webp" alt="Iklan" title="iklan">
                </a>
            </div>
            <div class="adsHAMRight">
                <?php echo mnel_show_five_stars(); ?>
                <h3 class="globalHighlight">
                    PT. Fajarmerah Indo Service
                </h3>
                <small>Perusahaan outsourcing satpam resmi, legal & terbaik Penyalur: security, personal bodyguard, SPG, Office Boy, Cleaning Service dll keseluruh Indonesia.</small>
                <span>
                    <?php echo mnel_show_phone_icon_old(); ?> <small class="adsHAMphone">Phone: 0822-1014-0182.</small>
                </span>
                <a rel="noopener, nofollow" target="_blank" title="PT. FMG" href="//fajarmerahgroup.com/contact-us/">Visit Website</a>
            </div>
        </div>
    </div>
<?php
}
