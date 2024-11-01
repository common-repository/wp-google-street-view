<?php 
function display_wpgsv_shortcode() {

    $screen = get_current_screen();

    $post_id = get_the_ID();
    $post_status = get_post_status ( $post_id );

    if ( $post_status == 'publish' ) {

        if ( $screen->base == 'post' && $screen->post_type == 'wpgsv' ) {

            $output = "";

            $output .= '<h1>Copy/Paste this Shortcode</h1><input type="text" class="wpgsv-readonly wpgsv-shortcode" value=\'[wpgsv id="' . $post_id . '"]\' readonly />';
            echo $output;
        }

    }  
    
}

add_action( 'edit_form_top', 'display_wpgsv_shortcode');



// Add the custom column for shortcode
add_filter( 'manage_wpgsv_posts_columns', 'wpgsv_column' );

function wpgsv_column($columns) {
    $columns['wpgsv_shortcode'] = __( 'Shortcode', 'wpgsv' );
    return $columns;
}

// Add shortcode to the custom column
add_action( 'manage_wpgsv_posts_custom_column' , 'wpgsv_shortcode_column', 10, 2);

function wpgsv_shortcode_column( $column, $post_id ) {
    switch ( $column ) {

        case 'wpgsv_shortcode' :
        echo '<input type="text" class="wpgsv-readonly" value=\'[wpgsv id="' . $post_id . '"]\' readonly />'; 
        break;
    }
}