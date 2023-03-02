<?php
defined('ABSPATH') || exit;

function mntp_header() {
    ?>
    <header class="section">
        <div class="container">
            <div class="headerWr">
                <div class="headerLeft headerCol">
                    <a title="<?php echo get_bloginfo('name') ?>" href="/">
                        <h2 class="mylogo">Outsourcing</h2>
                    </a>
                </div>
                <div class="headerRight headerCol">
                    <?php echo mnads_show_ads_in_header(); ?>
                </div>
            </div>
        </div>
    </header>
    <?php
}