window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {

        var popupPr = jQuery('<div id="popupPr"></div>');
        var popupClose = jQuery('<div id="popupClose">X</div>');
        var popupWr = jQuery('<div id="popupWr"></div>');
        var bannerPopup = jQuery('<a rel="noopener, nofollow" target="_blank" href="//fajarmerahgroup.com/diklat-pelatihan-satpam-gada-pratama-maret-2023-pt-fajarmerah-indo-servis/" target="_blank"><img src="//fajarmerahgroup.com/wp-content/uploads/2023/02/diklat-satpam-2023.webp" alt="Diklat Pelatihan Satpam Gada Pratama Maret 2023 PT Fajarmerah Indo Servis" title="Diklat Pelatihan Satpam Gada Pratama Maret 2023 PT Fajarmerah Indo Servis" width="312" height="400" /></a>');

        // on window load show popup show
        jQuery(window).on('load', function () {
            popupPr.append(popupClose);
            popupPr.append(popupWr);
            popupWr.append(bannerPopup);
            jQuery('body').append(popupPr);
        });
        
        // close popup
        
        jQuery(popupClose).click(function () {
            jQuery(popupPr).addClass('inactive').slideUp(500);
        });






       
        
















        // end of popup
    });
    // end of DOMContentLoaded
});