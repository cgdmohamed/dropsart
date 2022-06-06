<?php
// Register Custom Post Type
function testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'dropsart' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'dropsart' ),
		'menu_name'             => __( 'Testimonials', 'dropsart' ),
		'name_admin_bar'        => __( 'Testimonial', 'dropsart' ),
		'archives'              => __( 'Testimonials Archives', 'dropsart' ),
		'attributes'            => __( 'Testimonials Attributes', 'dropsart' ),
		'parent_item_colon'     => __( 'Testimonials Parent', 'dropsart' ),
		'all_items'             => __( 'All Testimonials', 'dropsart' ),
		'add_new_item'          => __( 'Add New Testimonial', 'dropsart' ),
		'add_new'               => __( 'Add Testimonial', 'dropsart' ),
		'new_item'              => __( 'New Testimonial', 'dropsart' ),
		'edit_item'             => __( 'Edit Testimonial', 'dropsart' ),
		'update_item'           => __( 'Update Testimonial', 'dropsart' ),
		'view_item'             => __( 'View Testimonial', 'dropsart' ),
		'view_items'            => __( 'View Testimonials', 'dropsart' ),
		'search_items'          => __( 'Search Testimonial', 'dropsart' ),
		'not_found'             => __( 'Not Testimonials found', 'dropsart' ),
		'not_found_in_trash'    => __( 'Not Testimonials found in Trash', 'dropsart' ),
		'featured_image'        => __( 'Author Image', 'dropsart' ),
		'set_featured_image'    => __( 'Set author image', 'dropsart' ),
		'remove_featured_image' => __( 'Remove author image', 'dropsart' ),
		'use_featured_image'    => __( 'Use as author image', 'dropsart' ),
		'insert_into_item'      => __( 'Insert into item', 'dropsart' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'dropsart' ),
		'items_list'            => __( 'Items list', 'dropsart' ),
		'items_list_navigation' => __( 'Items list navigation', 'dropsart' ),
		'filter_items_list'     => __( 'Filter items list', 'dropsart' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'dropsart' ),
		'description'           => __( 'Testimonial content', 'dropsart' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             =>'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'testimonials', 0 );