window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        // mobile floating button
        var toggleCloseShareButton = jQuery('#toggleCloseShare');
        var toggleOpenShareButton = jQuery('#toggleOpenShare');
        var ctaWr = jQuery('#mobFloCtaWr');
        var shareWr = jQuery('#mobFloShareItemWr');

        toggleOpenShareButton.slideDown();
        toggleCloseShareButton.slideUp();
        jQuery(shareWr).slideUp();
        
        // open Share
        jQuery(toggleOpenShareButton).click(function () {
            jQuery(this).slideUp(500);
            jQuery(shareWr).slideDown();
            jQuery(ctaWr).slideUp();
            jQuery(toggleCloseShareButton).slideDown(500);
        });
        
        
        
        // close share btn
        jQuery(toggleCloseShareButton).click(function () {
            jQuery(this).slideUp();
            jQuery(shareWr).slideUp();
            jQuery(ctaWr).slideDown();
            jQuery(toggleOpenShareButton).slideDown(300);
            
        });


        
    });

});