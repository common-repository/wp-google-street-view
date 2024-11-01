jQuery(function($) {

    $('.wpgsv-add-button').on('click', function(e) {
        e.preventDefault();
        tb_show("WP Google Street View Shortcode", "#TB_inline?width=400&height=200&inlineId=wpgsv__shortcode");
        $('#TB_window').css({"width": "500px", "height": "230px", 'top': 'calc(50% - 115px)','margin-left': '-250px' });
        $('#TB_ajaxContent').css({"width": "100%", "height": "auto"})
        return false;
    });

    if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {

        $('#wpgsv_insert_shortcode').on('click', function(e) {

            e.preventDefault();

            var pageId = $('.wpgsv-select.post-selector').val();

            if (pageId == "0") {
                $('.wpgsv-btn-error').html('<div class="notice notice-error is-dismissible"><p>Please select a Google Street View / Map from drop-down</p></div>')
            } else {
                wp.media.editor.insert('[wpgsv id="'+pageId+'"]');
                $('.wpgsv-error').empty();
                return false;
            }
        });

    }

});