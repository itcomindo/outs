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
    });
});