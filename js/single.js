window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        // Check if the AdSense code is displayed
        var $adsenseDiv = $('.inlineAdsWr');
        if ($adsenseDiv.children().length > 0 && $adsenseDiv.is(':visible')) {
            console.log('AdSense code displayed');
        } else {
            console.log('AdSense code not displayed');
            // Replace the AdSense code with another ad or content here
            $adsenseDiv.html('YOUR REPLACEMENT CODE HERE');
        }

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