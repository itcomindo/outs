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
            console.log('All fonts are loaded');
        },
    });
});