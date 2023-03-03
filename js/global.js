window.addEventListener('DOMContentLoaded', (event) => {
    // Vanilla JS
    WebFont.load({
        google: {
            families: [
                "Inter:100,200,300,400,500,600,700",
                "OPen+Sans:400,600",
                "Roboto+Condensed:400,700",
                "Montserrat:400,600,700",
            ],
        },
        active: function () {
            // console.log('All fonts are loaded');
        },
    });


    // ? start jquery

    jQuery(function () {
        var toggleClose = jQuery('#toggleClose');
        var toggleOpen = jQuery('#toggleOpen');
        var chatBox = jQuery('#cb');
        var chatBoxLogo = jQuery('.cbTopLeft img');
        jQuery(toggleClose).click(function () {
            jQuery(chatBox).removeClass('active').addClass('inactive');
            jQuery(this).removeClass('active').addClass('inactive');
            jQuery(toggleOpen).removeClass('inactive').addClass('active');
            jQuery(chatBoxLogo).removeClass('animate__rotateIn').addClass('animate__bounce');
        });
        // open chat box
        jQuery(toggleOpen).click(function () {
            jQuery(chatBox).removeClass('inactive').addClass('active');
            jQuery(this).removeClass('active').addClass('inactive');
            jQuery(toggleClose).removeClass('inactive').addClass('active');
            jQuery(chatBoxLogo).addClass('animate__rotateIn').removeClass('animate__bounce');
        });

        // off canvas menu
        var toggleHeaderMenuWr = jQuery('#toggleHeaderMenuWr');
        var headerMenuContainerWr = jQuery('#headerMenuContainerWr');
        jQuery(toggleHeaderMenuWr).click(function () {
            jQuery(headerMenuContainerWr).removeClass('slideUp').addClass('slideDown');
            jQuery('body').addClass('noScroll');
        });
        
        // close off canvas menu
        jQuery('#headerMenuContainerWr').click(function () {
            jQuery(this).removeClass('slideDown').addClass('slideUp');
            jQuery('body').removeClass('noScroll');
        });












// jquery end above this line
    });

});