<?php
defined('ABSPATH') || exit;



function mnel_show_chatbox()
{
?>
    <div id="cb" class="active">
        <div id="toggleClose" class="active">Minimize</div>
        <div id="toggleOpen" class="inactive">Chat With Us</div>
        <div class="cbWr">
            <div class="cbTop">
                <div class="cbTopLeft">
                    <?php echo mnuser_show_logo_perusahaan(false, 'animate__animated', '60'); ?>
                </div>
                <div class="cbTopRight">
                    <span class="csHead">Customer Service</span>
                    <span class="cbNamaPerusahaan">
                        <?php echo mnuser_show_nama_perusahaan(false); ?>
                    </span>
                </div>
            </div>
            <div class="cbBot">
                <div class="staffWr">
                    <div class="staffLeft">
                        <img width="40" src="<?php echo get_template_directory_uri() . '/images/user.webp' ?>" alt="customer service" title="customer service">
                    </div>
                    <div class="staffMid">
                        <span class="staffName">Customer Service</span>
                        <span class="staffPhone">
                            <?php echo mnel_show_user_phone_number('number'); ?>
                        </span>
                    </div>
                    <div class="staffRight">
                        <a title="chat whatsapp" rel="noopener, nofollow" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo mnel_show_user_wacall('linknumber'); ?>&text=<?php echo mncore_wa_message(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/whatsapp.svg' ?>">Whatsapp</a>
                        <a title="telepon" rel="noopener, nofollow" target="_blank" href="tel:+<?php echo mnel_show_user_wacall('linknumber') ?>"><img src="<?php echo get_template_directory_uri() . '/images/call.svg' ?>">Telepon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
