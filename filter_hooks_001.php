<?php 
/**
* Plugin Name: Basic Plugin
* Plugin URI: www.google.com
* Description: Learning - Creating and displaying job opportunities.
* Author: Richard Fernandez
* Author URI: www.google.com
* Version 1.0
* License: GPLv2
*/

// dwwp: develop with wordpress
// This plugin will (Filter Hooks)
// Filters are telling WP to do something diffrently to something WP is already going to do.
// https://codex.wordpress.org/Plugin_API
// https://developer.wordpress.org/resource/dashicons/#location-alt

// Objective:
// 1. Hook into a plugin and filter the argument to change the output in this case we are changing an icon
// 2. Change the work Books to Booookz

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');



			// Change icon


function dwwp_alter_books_icon( $args) {
	// https://developer.wordpress.org/resource/dashicons/#book-alt
	// args associative array which we are switching to the book icon from above
	$args['menu_icon'] = 'dashicons-book-alt';
	// need to return this data for use
	return $args;
}
// https://developer.wordpress.org/reference/functions/add_filter/
// Need to hook in
add_filter( 'dwwp_post_type_args', 'dwwp_alter_books_icon');


			// Book to Booookz

function dwwp_change_label( $plural ) {
	$plural = 'Booookz';
	return $plural;
}
add_filter('dwwp_post_type_plural', 'dwwp_change_label');

?>