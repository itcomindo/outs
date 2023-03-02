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


        
    });

});