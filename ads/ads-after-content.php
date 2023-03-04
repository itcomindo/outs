<?php
defined('ABSPATH') || exit;

function mnads_show_ads_after_content()
{
    $option = carbon_get_theme_option('enable_ads_after_content_option');
    if ($option == true) {
?>
        <div class="adsAfterContentPr">
            <div class="adsAfterContentWr">
                <div class="adsAfterContentLeft adsAfterContentCol">
                    <?php
                    $adsLeft = carbon_get_theme_option('ads_after_content_left_mn');
                    if (empty($adsLeft)) {
                    ?>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7273106919951725" crossorigin="anonymous"></script>
                        <!-- All Size Responsive -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7273106919951725" data-ad-slot="3029550843" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php
                    } else {
                        $adsLeft = $adsLeft;
                    }
                    ?>
                </div>
                <div class="adsAfterContentRight adsAfterContentCol">
                    <?php
                    $adsRight = carbon_get_theme_option('ads_after_content_right_mn');
                    if (empty($adsRight)) {
                    ?>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7273106919951725" crossorigin="anonymous"></script>
                        <!-- All Size Responsive -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7273106919951725" data-ad-slot="3029550843" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php

                    } else {
                        $adsRight = $adsRight;
                    }

                    ?>

                </div>
            </div>
        </div>
<?php
    }
}
?>