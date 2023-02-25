<?php
defined('ABSPATH') || exit;

function mn_header_menu() {
    ?>
    <div id="headerMenuPr" class="section">
        <div class="container">
            <div class="headerMenuWr">
                <div class="headerMenuLeft headerMenuCol">Menu Goes Here</div>
                <div class="headerMenuRight headerMenuCol">
                    <div id="toggleMobileMenu" class="inactive">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}