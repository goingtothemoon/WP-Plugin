<?php 
/**
* Plugin Name: Job Listing
* Plugin URI: www.google.com
* Description: Learning - Creating and displaying job opportunities.
* Author: Richard Fernandez
* Author URI: www.google.com
* Version 0.0.1
* License: GPLv2
*/

//Exit if accessed directly

if ( ! defined( 'ABSPATH') ) {
	exit;
}

// Custom Post Types

function dwwp_register_post_type() {

	$singular = 'Job Listing';
	$plural   = 'Job Listings';
//  (labels) https://codex.wordpress.org/Function_Reference/register_post_type
	$labels = array(
			'name'         					 => $plural,
			'singular_name' 				 => $singular,
			'add_name'      				 => 'Add New',
			'add_new_item' 					 => 'Add New ' . $singular, // Output add new job listing
			'edit'  						 => 'Edit',
			'edit_item' 					 => 'Edit '    . $singular,
			'new_item'					     => 'New ',    . $singular,
			'view'  						 => 'View '    . $singular,
			'view_item'  					 => 'View '    . $singular,
			'search_term'  					 => 'Search '  . $singular,
			'parent'  						 => 'Parent '  . $singular,
			'not_found'  					 => 'No ' 	   . $plural,
			'not_found_in_trash' 			 => 'No '	   . $plural    . ' in Trash'
		);

	$args = array(
		'labels'              => $labels,
	        'public'              => true,	// How visible do I want this custom post
	        'publicly_queryable'  => true,  //
	        'exclude_from_search' => false, //
	        'show_in_nav_menus'   => true,	//
	        'show_ui'             => true,	//
	        'show_in_menu'        => true,	//
	        'show_in_admin_bar'   => true,	//
	        'menu_position'       => 10,	//
	        'menu_icon'           => 'dashicons-businessman',	//
	        'can_export'          => true,	//
	        'delete_with_user'    => false,	//
	        'hierarchical'        => false,	//
	        'has_archive'         => true,	//
	        'query_var'           => true,	//
	        'capability_type'     => 'post',	//
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array( 
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages'		 => true,
	        	'feeds' 	 => true,
	);

	register_post_type ( 'job', $args);
}
add_action( 'init', 'dwwp_register_post_type');


?>