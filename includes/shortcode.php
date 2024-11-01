<?php

function wpgsv__shortcode(  $atts  ) {
    global $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();
    $api = $wpgsv__options['google_maps_api'];
    $google_maps = "https://maps.googleapis.com/maps/api/js?libraries=places&key={$api}";
    wp_enqueue_script( 'wpgsv_maps', $google_maps );
    wp_enqueue_style(
        'wpgsv_styles',
        WPGSV_PLUGIN_DIR . '/assets/css/styles.css',
        array(),
        filemtime( WPGSV_PLUGIN_PATH . '/assets/css/styles.css' )
    );
    wp_enqueue_script( 'wpgsv_vue', WPGSV_PLUGIN_DIR . '/vendor/vue.min.js' );
    wp_enqueue_script(
        'wpgsv_app',
        WPGSV_PLUGIN_DIR . '/assets/js/app.js',
        array(),
        filemtime( WPGSV_PLUGIN_PATH . '/assets/js/app.js' ),
        true
    );
    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts, 'wpgsv' );
    $postId = $atts['id'];
    if ( empty( $postId ) ) {
        return __( "Please add post ID to see WP Google Street View", "wp-google-street-view" );
    } else {
        // WP_Query Arguments
        $args = array(
            'post_type'   => 'wpgsv',
            'p'           => $postId,
            'post_status' => 'publish',
        );
        // Start New Query for WP Google Street View
        $query = new WP_Query($args);
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                $meta = get_post_meta( $postId );
                $width = ( isset( $meta['mapWidth'] ) && !empty( $meta['mapWidth'] ) ? $meta['mapWidth'][0] : '100%' );
                $height = ( isset( $meta['mapHeight'] ) && !empty( $meta['mapHeight'] ) ? $meta['mapHeight'][0] : '450' );
                $metadata = array();
                foreach ( $meta as $key => $value ) {
                    if ( isset( $key ) && in_array( $key, WPGSV_Validate::$fields ) || in_array( $key, WPGSV_Validate::$checkboxes ) || in_array( $key, WPGSV_Validate::$textarea ) ) {
                        $metadata[$key] = $value[0];
                    }
                }
                //var_dump($metadata);
                //wp_localize_script( 'wpgsv_app', 'meta'.$postId, $metadata);
                $output = '<div class="wpgsv-app" id="app' . $postId . '" ';
                foreach ( $metadata as $key => $value ) {
                    $output .= "data-" . $key . '="' . htmlspecialchars( $value ) . '" ';
                }
                $output .= '><div class="wpgsv-map-container" style="width: ' . $width . '; height: ' . $height . 'px;">';
                if ( $metadata["type"] == 'street' ) {
                    $output .= '<div id="wpgsv-pano-app' . $postId . '" class="wpgsv-pano" style="width: 100%; height: 100%;"></div>';
                }
                if ( $metadata["type"] == 'map' ) {
                    $output .= '<div id="wpgsv-map-app' . $postId . '" class="wpgsv-map" style="width: 100%"></div>';
                }
                if ( $metadata["type"] == 'streetmap' ) {
                    $output .= '<div id="wpgsv-map-app' . $postId . '" class="wpgsv-map"></div><div id="wpgsv-pano-app' . $postId . '" class="wpgsv-pano"></div>';
                }
                if ( $metadata["type"] == 'streetmapfree' ) {
                    $output .= '<p style="text-align: center">' . __( 'Choose Street View or Basic Map Type. Street View + Map Works in WP Google Street View Pro Version', 'wp-google-street-view' ) . '</p>';
                }
                $output .= '</div></div>';
            }
        } else {
            return __( "Please add correct post id for WP Google Street View", "wp-google-street-view" );
        }
    }
    wp_reset_postdata();
    return $output;
}

add_shortcode( 'wpgsv', 'wpgsv__shortcode' );
function wpgsv_map_shortcode(  $atts  ) {
    global $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();
    $api = esc_attr( $wpgsv__options['google_maps_api'] );
    $google_maps = "https://maps.googleapis.com/maps/api/js?libraries=places&key={$api}";
    wp_enqueue_script( 'wpgsv_maps', $google_maps );
    wp_enqueue_style(
        'wpgsv_styles',
        WPGSV_PLUGIN_DIR . '/assets/css/styles.css',
        array(),
        filemtime( WPGSV_PLUGIN_PATH . '/assets/css/styles.css' )
    );
    wp_enqueue_script( 'wpgsv_vue', WPGSV_PLUGIN_DIR . '/vendor/vue.min.js' );
    wp_enqueue_script(
        'wpgsv_app',
        WPGSV_PLUGIN_DIR . '/assets/js/app.js',
        array(),
        filemtime( WPGSV_PLUGIN_PATH . '/assets/js/app.js' ),
        true
    );
    $atts = shortcode_atts( array(
        'lat'    => '',
        'lng'    => '',
        'info'   => '',
        'width'  => '100%',
        'height' => '450px',
        'zoom'   => '10',
        'type'   => 'street',
    ), $atts );
    $post_id = get_the_ID() . '_' . rand( 1000, 9999 );
    $div_id = 'app' . esc_attr( $post_id );
    $style = 'style="width: ' . esc_attr( $atts['width'] ) . '; height: ' . esc_attr( $atts['height'] ) . ';"';
    $class = 'class="wpgsv-app"';
    $data_attributes = array(
        'data-lat'     => esc_attr( $atts['lat'] ),
        'data-lng'     => esc_attr( $atts['lng'] ),
        'data-address' => esc_attr( $atts['info'] ),
        'data-zoom'    => esc_attr( $atts['zoom'] ),
        'data-type'    => esc_attr( $atts['type'] ),
    );
    $data_string = '';
    foreach ( $data_attributes as $key => $value ) {
        $data_string .= $key . '="' . $value . '" ';
    }
    $data_string = trim( $data_string );
    if ( $atts['type'] == 'street' ) {
        $output = '<div id="' . $div_id . '" ' . $class . ' ' . $data_string . '><div class="wpgsv-map-container" ' . $style . '><div id="wpgsv-pano-app' . esc_attr( $post_id ) . '" class="wpgsv-pano" style="width: 100%; height: 100%;"></div></div></div>';
    } elseif ( $atts['type'] == 'map' ) {
        $output = '<div id="' . $div_id . '" ' . $class . ' ' . $data_string . '><div class="wpgsv-map-container" ' . $style . '><div id="wpgsv-map-app' . esc_attr( $post_id ) . '" class="wpgsv-map" style="width: 100%; height: 100%;"></div></div></div>';
    } elseif ( $atts['type'] == 'streetmap' ) {
        $output = '<div id="' . $div_id . '" ' . $class . ' ' . $data_string . '><div class="wpgsv-map-container" ' . $style . '><div id="wpgsv-pano-app' . esc_attr( $post_id ) . '" class="wpgsv-pano" style="width: 100%; height: 100%;"></div><div id="wpgsv-map-app' . esc_attr( $post_id ) . '"></div></div>';
        $output .= '<div style="text-align: right; font-size: 11px; opacity: 0.5">' . __( 'Get WP Google Street View Pro to output both street and map', 'wp-google-street-view' ) . '</div>';
        $output .= '</div>';
    } else {
        $output = __( 'Please add correct type for WP Google Street View. e.g: street, map, streetmap (pro)', 'wp-google-street-view' );
    }
    return $output;
}

add_shortcode( 'wpgsv_map', 'wpgsv_map_shortcode' );