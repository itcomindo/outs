
(function () {
    tinymce.PluginManager.add('ads_button', function (editor, url) {
        editor.addButton('ads', {
            text: 'Ads',
            icon: false,
            onclick: function () {
                editor.insertContent('[ads]');
            }
        });
    });
})();



