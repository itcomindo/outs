<?php
defined('ABSPATH') || exit;

function mnads_home_afer_header_menu()
{
?>
    <div id="adsHAMPr" class="section">
        <div class="container">
            <div class="adsHomeAfterMenuWr">
                <div class="adsHAMLeft">
                    <a title="iklan" href="#">
                        <img width="80" height="80" src="/wp-content/uploads/2023/03/fmg-150x150-1.webp" alt="Iklan" title="iklan">
                    </a>
                </div>
                <div class="adsHAMRight">
                    <?php echo mnel_show_five_stars(); ?>
                    <h3 class="globalHighlight">
                        PT. Kalang Kabut Permanent
                    </h3>
                    <small>Perusahaan outsourcing satpam resmi, legal & terbaik Penyalur: security, personal bodyguard, SPG, Office Boy, Cleaning Service dll keseluruh Indonesia.</small>
                    <span>
                        <?php echo mnel_show_phone_icon_old(); ?> <small class="adsHAMphone">Phone: 0813-4567-8900.</small>
                    </span>
                    <a title="Visit Website" href="#">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
