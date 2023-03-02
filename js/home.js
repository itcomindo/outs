window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        jQuery('.theSlideWr').flickity({
            // options
            cellAlign: 'center',
            contain: true,
            wrapAround: true,
            autoPlay: 3000,
            pauseAutoPlayOnHover: false,
            prevNextButtons: false,
            pageDots: true,
        });

        // ads home after menu
        var toggleOpenAdsHAM = jQuery('#toggleOpenAdsHAM');
        var toggleCloseAdsHAM = jQuery('#toggleCloseAdsHAM');
        var adsHomeAfterMenuWr = jQuery('.adsHomeAfterMenuWr');
        toggleOpenAdsHAM.slideUp();
        
        jQuery(toggleCloseAdsHAM).click(function () {
            jQuery(this).slideUp(); 
            toggleOpenAdsHAM.slideDown();
            adsHomeAfterMenuWr.slideUp();
        });

        jQuery(toggleOpenAdsHAM).click(function () {
            jQuery(this).slideUp();
            toggleCloseAdsHAM.slideDown();
            adsHomeAfterMenuWr.slideDown();
        });

        // infinite scroll iniitialize

        jQuery('.homeContColPostsWr').infiniteScroll({
                // options
                path: '.globalPaged a.next',
                append: '.homeContColPostItem',
                history: true,
            });
            







    });
});