document.addEventListener('DOMContentLoaded', function () {

    const input = document.querySelector('#test');

    let config = {
        'plugins': 'autoresize code',
        'selector':'.tinymce',
        'min_height': 100,
        'statusbar': false,
        'toolbar': 'bold italic code | quicklink h2 h3 blockquote | alignleft aligncenter alignright alignjustify | removeformat | quickimage quicktable',
        'quickbars_selection_toolbar': 'bold italic link',
        setup: (element) => {
            element.on('change', () => {
                console.log(element.getContent())
                input.value = element.getContent()
                let event = new Event('change');
                input.dispatchEvent(event);
            });
        },
    }

    tinymce.init(config)
})
