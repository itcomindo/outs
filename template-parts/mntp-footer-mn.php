<?php
defined('ABSPATH') || exit;
/**
 * Template part for displaying Footer
 * 3 Columns Footer
 * Copyright website
 */


function mntp_footer()
{
?>
    <footer class="section globalSection">
        <div class="container">
            <div id="fooTop" class="foRow">
                <h2 class="globalSectionHead">
                    outsourcing.web.id
                </h2>
                <p>Jl. Mujahidin 1 No.112 RT02/08 Kreo Selatan, Kota Tangerang, Banten 15156</p>
                <p>0813-9891-2341</p>
            </div>
            <div id="fooMid" class="foRow">
                <!-- footer Left -->
                <div class="fooMidLeft fooCol">
                    <div class="fooHeadWr">
                        <h3>About</h3>
                        <p>Outsourcing.web.id merupakan blog yang memberikan informasi seputar bisnis outsourcing di Indonesia.</p>
                        <p>Kritik, saran dan keluhan dapat anda berikan melalui email outsourcing.web.id pada halaman <a class="linkUnderline" title="contact" href="/contact/">Contact</a>.</p>
                    </div>
                </div>
                <!-- footer midle -->
                <div class="fooMidMid fooCol">
                    <div class="fooHeadWr">
                        <h3>Menu</h3>
                    </div>
                    <?php echo mnmenu_show_footer_menu(); ?>
                </div>
                <!-- footer right -->
                <div class="fooMidRight fooCol">
                    <div class="fooHeadWr">
                        <h3>Footer Right</h3>
                    </div>
                </div>
            </div>
            <div id="fooBot" class="foRow"></div>
        </div>
    </footer>
    <!-- copyright -->
    <div id="cp" class="section">
        <div class="container">
            <small>Copyright</small> <?php echo mnel_show_login_button(); ?> <?php echo mnel_show_logout_button(); ?>
        </div>
    </div>
<?php

}


