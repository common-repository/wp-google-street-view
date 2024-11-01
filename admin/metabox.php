<?php

add_action( 'add_meta_boxes', 'wpgsv__remove_metaboxes', 5 );

function wpgsv__remove_metaboxes(){
    global $wp_meta_boxes;
    global $post;
    $current_post_type = get_post_type($post);
    if($current_post_type == 'wpgsv') {
        $publishbox = $wp_meta_boxes['wpgsv']['side']['core']['submitdiv'];
        $wp_meta_boxes = array();
        $wp_meta_boxes['wpgsv'] = array(
            'side' => array('core' => array('submitdiv' => $publishbox))
          );
    }
}

add_action( 'add_meta_boxes', 'wpgsv__options', 6 );
function wpgsv__options() {
        add_meta_box(
            'wpgsv_post_options', // id, used as the html id att
            __( 'WP Google Street View', 'wp-google-street-view' ), // meta box title
            'wpgsv__metabox', // callback function, spits out the content
            'wpgsv', // post type or page. This adds to posts only
            'normal', // context, where on the screen
            'high' // priority, where should this go in the context
        );
}

function wpgsv__metabox( $post ) {

    global  $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();
    $meta = get_post_meta($post->ID);

    $metadata = array();

    if (isset($wpgsv__options['google_maps_api']) && !empty($wpgsv__options['google_maps_api'])) {
        $metadata['api'] = $wpgsv__options['google_maps_api'];
    }
    
    foreach ($meta as $key => $value) { 
        if (isset($key) && in_array($key, WPGSV_Validate::$fields) || in_array($key, WPGSV_Validate::$checkboxes) || in_array($key, WPGSV_Validate::$textarea) ) {
            $metadata[$key] = $value[0];
        }
    }

    wp_localize_script( 'wpgsv-admin', 'meta', $metadata); 
    
    //var_dump($metadata);
    
    include WPGSV_PLUGIN_PATH . '/admin/inc/metabox_form.php';

}

add_action( 'save_post', 'wpgsv__save_meta');

function wpgsv__save_meta( $postid ) {

    $validation = new WPGSV_Validate($_POST);

        foreach ($validation->getData() as $key => $value) {

            if ( isset($key) ) {

                if ( in_array($key, WPGSV_Validate::$fields) ) {

                    update_post_meta( $postid, $key, sanitize_text_field( $value ));

                }

                if ( in_array($key, WPGSV_Validate::$textarea) ) {

                    update_post_meta( $postid, $key, trim($value) );

                }

            }

            else {
  
                delete_post_meta( $postid, $key );

            }

        }

        foreach (WPGSV_Validate::$checkboxes as $checkbox) {

            if ( isset( $validation->getData()[$checkbox] ) ) {

                update_post_meta( $postid, $checkbox, 'true' );

            } else {

                //delete_post_meta( $postid, $field );
                update_post_meta( $postid, $checkbox, 'false' );

            }

        }

}


add_action( 'add_meta_boxes', 'wpgsv__type', 7 );
function wpgsv__type() {
        add_meta_box(
            'wpgsv_side_type', // id, used as the html id att
            __( 'WP Google Street View, How to ...?', 'wp-google-street-view' ), // meta box title
            'wpgsv__type_metabox', // callback function, spits out the content
            'wpgsv', // post type or page. This adds to posts only
            'side', // context, where on the screen
            'high' // priority, where should this go in the context
        );
}

function wpgsv__type_metabox() {

    include WPGSV_PLUGIN_PATH . '/admin/inc/metabox_side.php';

}

include WPGSV_PLUGIN_PATH . "/admin/inc/metabox_shortcode.php";