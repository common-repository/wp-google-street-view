<?php 
/******************************************
                Admin Classes
*******************************************/
require WPGSV_PLUGIN_PATH . '/admin/class/Enqueue.php';
require WPGSV_PLUGIN_PATH . '/admin/class/Option.php';
require WPGSV_PLUGIN_PATH . '/admin/class/Validate.php';
require WPGSV_PLUGIN_PATH . '/admin/class/Field.php';
require WPGSV_PLUGIN_PATH . '/admin/class/MetaField.php';
require WPGSV_PLUGIN_PATH . '/admin/class/Notice.php';
/******************************************
                Setting Assets
*******************************************/
require WPGSV_PLUGIN_PATH . '/admin/inc/assets.php';
/******************************************
                Setting Page
*******************************************/
add_action('admin_menu', 'wpsgv__admin_menu');
function wpsgv__admin_menu()
{
    add_submenu_page (
        'edit.php?post_type=wpgsv',
        __( 'WP Google Street View Settings', 'wp-google-street-view' ),
        __( 'Settings','wp-google-street-view' ),
        'manage_options',
        'settings',
        'wpgsv__settings'
    );
}

function wpgsv__settings() {

    global  $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();
    
    // SET TABS
    $wpgsv__safe = array("wpgsv-settings", "wpgsv-seo", "wpgsv-faq");

    $active_tab = '';

    if (isset($_GET['tab'])) {
        $active_tab = sanitize_key($_GET['tab']);
    }

    $active_tab = ( isset( $_GET['tab'] ) && in_array( $active_tab, $wpgsv__safe ) ? $active_tab : 'wpgsv-settings' );

    if (isset( $_POST['update'] )) {

        if ( function_exists( 'current_user_can' ) && !current_user_can( 'manage_options' ) ) {
            die( 'Sorry, not allowed...' );
        }
        check_admin_referer( 'wpgsv__settings', 'wpgsv__nonce' );

        if ( ! isset( $_POST['wpgsv__nonce'] ) || ! wp_verify_nonce( $_POST['wpgsv__nonce'], 'wpgsv__settings' )
        ) {
            die( 'Sorry, not allowed. Nonce doesn\'t verify' );
        }
        // FIELD VALIDATION

        $validation = new WPGSV_Validate($_POST);

        foreach ($validation->getData() as $key => $data) {

            if (isset($key)) {

                if ( in_array($key, WPGSV_Validate::$setting_fields) ) {

                    $wpgsv__options[$key] = sanitize_text_field( $data );
                
                }

                if ( in_array($key, WPGSV_Validate::$setting_textarea) ) {

                    $wpgsv__options[$key] = sanitize_textarea_field( $data );

                }

            } 
            
            // else { unset($wpgsv__options[$key]); } // unset the key

        }
        
        foreach (WPGSV_Validate::$setting_checkboxes as $field) {

            $wpgsv__options[$field] = isset( $validation->getData()[$field] ) ? true : false;

        }

        update_option( 'wpgsv_map', $wpgsv__options );

        // update options
        echo  '<div class="notice notice-success is-dismissible"><p><strong>' . esc_html__( 'Settings saved.', 'wpgsv' ) . '</strong></p></div>';

    }

    //var_dump($wpgsv__options);

    ?>

    <div class="wrap container-fluid">

    <h2>WP Google Street View Settings</h2>

    <h2 class="nav-tab-wrapper">

        <a href="<?php echo esc_url( 'edit.php?post_type=wpgsv&page=settings&tab=wpgsv-settings' ); ?>" class="wpgsv-tab nav-tab <?php echo $active_tab == 'wpgsv-settings' ? 'nav-tab-active' : ''; ?>">Settings</a>

        <a href="<?php echo esc_url( 'edit.php?post_type=wpgsv&page=settings&tab=wpgsv-seo' ); ?>" class="wpgsv-tab nav-tab <?php echo $active_tab == 'wpgsv-seo' ? 'nav-tab-active' : ''; ?>">Local SEO</a>
        
        <a href="<?php echo esc_url( 'edit.php?post_type=wpgsv&page=settings&tab=wpgsv-faq' ); ?>" class="wpgsv-tab nav-tab <?php echo $active_tab == 'wpgsv-faq' ? 'nav-tab-active' : ''; ?>">FAQ</a>

    </h2>

        <div class="row">

            <div id="wpgsv-app" class="col-xs-8 col-main">

            <div id="settings" <?php if (isset($wpgsv__options) && !empty($wpgsv__options)) { foreach ($wpgsv__options as $key => $option) { echo "$key='$option' "; } } ?>></div>

            <?php 

                if ( $active_tab == 'wpgsv-settings' ) { 
                    include WPGSV_PLUGIN_PATH . '/admin/inc/settings_form.php';
                }

                if ( $active_tab == 'wpgsv-seo' ) { 
                    include WPGSV_PLUGIN_PATH . '/admin/inc/settings_seo.php';
                }

                if ( $active_tab == 'wpgsv-faq' ) { 
                    include WPGSV_PLUGIN_PATH . '/admin/inc/settings_faq.php';
                } 
            
            ?>

            </div>

            <div class="col-xs-4">

                <?php 
                    include WPGSV_PLUGIN_PATH . '/admin/inc/settings_side.php';
                ?>

            </div>
        
        </div>

    </div>
        
<?php

}