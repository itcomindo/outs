window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {


        // auto ads in content
        var theContent = jQuery('.theContent');
        // get the tag p and it's pair then count
        var pTag = jQuery(theContent).find('p');
        // adsContent
        var adsContentOne = jQuery('#adsAutoInContentOne');
        var adsContentTwo = jQuery('#adsAutoInContentTwo');
        // content position
        var adsPosition = '0, 4';
        // create array from adsPosition
        var adsPositionInt = adsPosition.split(',').map(Number);

        console.log(adsPositionInt);


        // count the p tag
        var pTagCount = pTag.length;

        // append adsContent after p tag 2
        jQuery(pTag[adsPositionInt[0]]).after(adsContentOne);
        // append adsContent after last p tag
        jQuery(pTag[adsPositionInt[1]]).after(adsContentTwo);















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