window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        var googleSiteVer = jQuery('.googleSiteVer .cf-field__body input');
        var googleSiteVerVal = googleSiteVer.val();
        var googleSiteVerVal = googleSiteVerVal.replace('<meta name="google-site-verification" content="', '');
        var googleSiteVerVal = googleSiteVerVal.replace('" />', '');
        googleSiteVer.val(googleSiteVerVal);

        // bing
        var bingSiteVer = jQuery('.bingSiteVer .cf-field__body input');
        var bingSiteVerVal = bingSiteVer.val();
        var bingSiteVerVal = bingSiteVerVal.replace('<meta name="msvalidate.01" content="', '');
        var bingSiteVerVal = bingSiteVerVal.replace('"/>', '');
        bingSiteVer.val(bingSiteVerVal);




        
    });

});