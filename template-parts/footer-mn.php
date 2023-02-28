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
            </div>
            <div id="fooMid" class="foRow">
                <!-- footer Left -->
                <div class="fooMidLeft fooCol">
                    <div class="fooHeadWr">
                        <h3>Footer Left</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque temporibus deleniti error nam dolores aut ullam, molestiae harum ex sed facere natus animi, maxime aperiam a omnis doloribus veritatis magni?</p>
                    </div>
                </div>
                <!-- footer midle -->
                <div class="fooMidMid fooCol">
                    <div class="fooHeadWr">
                        <h3>Footer Mid</h3>
                    </div>
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
