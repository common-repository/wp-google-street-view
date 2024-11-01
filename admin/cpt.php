<?php 

function wpsgv__cpt() {

	$labels = array(
		'name'                  => _x( 'WP Google Street View', 'Post Type General Name', 'wp-google-street-view' ),
		'singular_name'         => _x( 'WP Google Street View', 'Post Type Singular Name', 'wp-google-street-view' ),
		'menu_name'             => __( 'WP Google Street View', 'wp-google-street-view' ),
		'name_admin_bar'        => __( 'WP Google Street View', 'wp-google-street-view' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wp-google-street-view' ),
		'all_items'             => __( 'All Items', 'wp-google-street-view' ),
		'add_new_item'          => __( 'Add New Map', 'wp-google-street-view' ),
		'add_new'               => __( 'Add New', 'wp-google-street-view' ),
		'new_item'              => __( 'New Item', 'wp-google-street-view' ),
		'edit_item'             => __( 'Edit Item', 'wp-google-street-view' ),
		'update_item'           => __( 'Update Item', 'wp-google-street-view' ),
		'not_found'             => __( 'Not found', 'wp-google-street-view' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wp-google-street-view' ),
		'featured_image'        => __( 'Featured Image', 'wp-google-street-view' ),
		'set_featured_image'    => __( 'Set featured image', 'wp-google-street-view' ),
		'remove_featured_image' => __( 'Remove featured image', 'wp-google-street-view' ),
		'use_featured_image'    => __( 'Use as featured image', 'wp-google-street-view' ),
		'insert_into_item'      => __( 'Insert into item', 'wp-google-street-view' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-google-street-view' ),
		'items_list'            => __( 'Items list', 'wp-google-street-view' ),
		'items_list_navigation' => __( 'Items list navigation', 'wp-google-street-view' ),
		'filter_items_list'     => __( 'Filter items list', 'wp-google-street-view' ),
	);
	$args = array(
		'label'                 => __( 'WP Google Street View', 'wp-google-street-view' ),
		'description'           => __( 'WP Google Street View Post Type', 'wp-google-street-view' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'wpgsv', $args );

}
add_action( 'init', 'wpsgv__cpt', 0 );

require WPGSV_PLUGIN_PATH . '/admin/metabox.php';