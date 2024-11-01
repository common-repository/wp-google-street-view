<?php

/*
* Plugin Name: WP Google Street View
* Description: The WP Google Street View allows you to embed Google street View (with virtual tour) & Google Maps maps with high quality markers.
* Author: Pagup
* Version: 1.1.3
* Author URI: https://pagup.com/
* Text Domain: wp-google-street-view
* Domain Path: /languages/
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !defined( 'WPGSV_PLUGIN_DIR' ) ) {
    define( 'WPGSV_PLUGIN_DIR', plugins_url( '', __FILE__ ) );
}
if ( !defined( 'WPGSV_PLUGIN_PATH' ) ) {
    define( 'WPGSV_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( function_exists( 'wpgsv__fs' ) ) {
    wpgsv__fs()->set_basename( false, __FILE__ );
} else {
    if ( !function_exists( 'wpgsv__fs' ) ) {
        function wpgsv__fs() {
            global $wpgsv__fs;
            if ( !isset( $wpgsv__fs ) ) {
                // Include Freemius SDK.
                require_once dirname( __FILE__ ) . '/vendor/freemius/start.php';
                $wpgsv__fs = fs_dynamic_init( array(
                    'id'              => '6039',
                    'slug'            => 'wp-google-street-view',
                    'type'            => 'plugin',
                    'public_key'      => 'pk_381a7c350b47bad35240ef6e7de4f',
                    'is_premium'      => false,
                    'premium_suffix'  => 'Wp Google StreetView PRO',
                    'has_addons'      => false,
                    'has_paid_plans'  => true,
                    'trial'           => array(
                        'days'               => 7,
                        'is_require_payment' => true,
                    ),
                    'has_affiliation' => 'all',
                    'menu'            => array(
                        'slug'       => 'settings',
                        'first-path' => 'edit.php?post_type=wpgsv&page=settings',
                        'support'    => false,
                        'parent'     => array(
                            'slug' => 'edit.php?post_type=wpgsv',
                        ),
                    ),
                    'is_live'         => true,
                ) );
            }
            return $wpgsv__fs;
        }

        // Init Freemius.
        wpgsv__fs();
        // Signal that SDK was initiated.
        do_action( 'wpgsv__fs_loaded' );
        function wpgsv__fs_settings_url() {
            return admin_url( 'edit.php?post_type=wpgsv&page=settings' );
        }

        wpgsv__fs()->add_filter( 'connect_url', 'wpgsv__fs_settings_url' );
        wpgsv__fs()->add_filter( 'after_skip_url', 'wpgsv__fs_settings_url' );
        wpgsv__fs()->add_filter( 'after_connect_url', 'wpgsv__fs_settings_url' );
        wpgsv__fs()->add_filter( 'after_pending_connect_url', 'wpgsv__fs_settings_url' );
    }
    // freemius opt-in
    function wpgsv__fs_custom_connect_message(
        $message,
        $user_first_name,
        $product_title,
        $user_login,
        $site_link,
        $freemius_link
    ) {
        $break = "<br><br>";
        $more_plugins = '<p><a target="_blank" href="https://wordpress.org/plugins/meta-tags-for-seo/">Meta Tags for SEO</a>, <a target="_blank" href="https://wordpress.org/plugins/automatic-internal-links-for-seo/">Auto internal links for SEO</a>, <a target="_blank" href="https://wordpress.org/plugins/bulk-image-alt-text-with-yoast/">Bulk auto image Alt Text</a>, <a target="_blank" href="https://wordpress.org/plugins/bulk-image-title-attribute/">Bulk auto image Title Tag</a>, <a target="_blank" href="https://wordpress.org/plugins/mobilook/">Mobile view</a>, <a target="_blank" href="https://wordpress.org/plugins/better-robots-txt/">Wordpress Better-Robots.txt</a>, <a target="_blank" href="https://wordpress.org/plugins/wp-google-street-view/">Wp Google Street View</a>, <a target="_blank" href="https://wordpress.org/plugins/vidseo/">VidSeo</a>, ...</p>';
        return sprintf( esc_html__( 'Hey %1$s, %2$s Click on Allow & Continue to create highly attractive maps with Wp Google Street View plugin.  %2$s Never miss an important update -- opt-in to our security and feature updates notifications. %2$s See you on the other side.', 'wp-google-street-view' ), $user_first_name, $break ) . $more_plugins;
    }

    wpgsv__fs()->add_filter(
        'connect_message',
        'wpgsv__fs_custom_connect_message',
        10,
        69
    );
    function wpgsv__fs_custom_icon() {
        return dirname( __FILE__ ) . '/assets/img/icon.png';
    }

    wpgsv__fs()->add_filter( 'plugin_icon', 'wpgsv__fs_custom_icon' );
    if ( !class_exists( 'WPGSV' ) ) {
        class WPGSV {
            public function __construct() {
                register_deactivation_hook( __FILE__, array(&$this, 'wpgsv__deactivate') );
                //plugin settings
                $plugin = plugin_basename( __FILE__ );
                if ( is_admin() ) {
                    add_filter( "plugin_action_links_{$plugin}", array(&$this, 'setting_link') );
                }
            }

            // end function
            // quick setting link in plugin section
            public function setting_link( $links ) {
                $settings_link = '<a href="edit.php?post_type=wpgsv&page=settings">Settings</a>';
                array_unshift( $links, $settings_link );
                return $links;
            }

            // end function
            function wpgsv__options() {
                $wpgsv__options = get_option( 'wpgsv_map' );
                return $wpgsv__options;
            }

            // removed settings (if checked) on plugin deactivation
            function wpgsv__deactivate() {
                $wpgsv__options = $this->wpgsv__options();
                if ( $wpgsv__options['remove_settings'] ) {
                    delete_option( 'wpgsv_map' );
                }
            }

        }

    }
    $wpgsv = new WPGSV();
    /*-----------------------------------------
                      Shortcode
      ------------------------------------------*/
    include_once WPGSV_PLUGIN_PATH . '/includes/shortcode.php';
    include_once WPGSV_PLUGIN_PATH . '/includes/shortcode_button.php';
    include_once WPGSV_PLUGIN_PATH . '/includes/structured_data.php';
    /*-----------------------------------------
                      Admin
      ------------------------------------------*/
    include_once WPGSV_PLUGIN_PATH . '/admin/settings.php';
    include_once WPGSV_PLUGIN_PATH . '/admin/cpt.php';
    /*-----------------------------------------
                  Text Domain Setup
      ------------------------------------------*/
    function wpgsv__textdomain() {
        load_plugin_textdomain( 'wp-google-street-view', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }

    add_action( 'init', 'wpgsv__textdomain' );
}