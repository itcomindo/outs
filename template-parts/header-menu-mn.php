<?php
defined('ABSPATH') || exit;

function mntp_header_menu()
{
?>
    <div id="headerMenuPr" class="section">
        <div class="container">
            <div class="headerMenuWr">
                <div class="headerMenuLeft headerMenuCol">
                    <div id="headerMenuContainer">

                        <div id="toggleHeaderMenuWr">

                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <g data-name="1" id="_1">
                                    <path d="M441.13,166.52h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z" />
                                    <path d="M441.13,279.72h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z" />
                                    <path d="M441.13,392.92h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z" />
                                </g>
                            </svg>


                        </div>



                        <div id="headerMenuContainerWr" class="desktop mobile slideUp">
                            <?php
                            echo mnmenu_show_header_menu();
                            ?>
                        </div>
                    </div>
                </div>
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
