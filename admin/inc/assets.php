<?php 
function wpgsv__assets() {

    global  $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();
    $api = ( isset($wpgsv__options['google_maps_api']) && !empty($wpgsv__options['google_maps_api']) ?  $wpgsv__options['google_maps_api'] : "");

    WPGSV_Enqueue::style('flexbox-grid', WPGSV_PLUGIN_DIR . '/assets/css/flexboxgrid.min.css', WPGSV_PLUGIN_PATH . '/assets/css/flexboxgrid.min.css');

    WPGSV_Enqueue::style('wpgsv-admin-styles', WPGSV_PLUGIN_DIR . '/assets/css/admin.css', WPGSV_PLUGIN_PATH . '/assets/css/admin.css');

    wp_register_script( 'google-maps', "https://maps.googleapis.com/maps/api/js?libraries=places&key=$api", array(), '', true );
    wp_enqueue_script( 'google-maps' );

    WPGSV_Enqueue::script('vue-js', WPGSV_PLUGIN_DIR . '/vendor/vue.min.js', WPGSV_PLUGIN_PATH . '/vendor/vue.min.js', true);

    WPGSV_Enqueue::script('axios', WPGSV_PLUGIN_DIR . '/vendor/axios.min.js', WPGSV_PLUGIN_PATH . '/vendor/axios.min.js', true);

    WPGSV_Enqueue::script('wpgsv-admin', WPGSV_PLUGIN_DIR . '/assets/js/admin.js', WPGSV_PLUGIN_PATH . '/assets/js/admin.js', true);

    wp_enqueue_media ();

}

if (isset($_GET['post_type']) && $_GET['post_type'] == 'wpgsv' || isset($_GET['action']) && $_GET['action'] == 'edit') {
    add_action( 'admin_enqueue_scripts', 'wpgsv__assets' );
}

function wpgsv__media_button() {
    // wp_enqueue_script('wpgsv-media-button', WPGSV_PLUGIN_DIR . '/assets/js/wpgsv_media_button.js', array('jquery'), '', true);

    WPGSV_Enqueue::style('wpgsv-media-button-styles', WPGSV_PLUGIN_DIR . '/assets/css/wpgsv_media_button.css', WPGSV_PLUGIN_PATH . '/assets/css/wpgsv_media_button.css');

    WPGSV_Enqueue::script('wpgsv-media-button', WPGSV_PLUGIN_DIR . '/assets/js/wpgsv_media_button.js', WPGSV_PLUGIN_PATH . '/assets/js/wpgsv_media_button.js', true);
}
add_action('wp_enqueue_media', 'wpgsv__media_button');
