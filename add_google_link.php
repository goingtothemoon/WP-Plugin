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
// This plugin will add a link to Google analytics (Action Hooks)
// Actions are telling WP to do something new.

function dwwp_add_google_link() {
	// https://codex.wordpress.org/Class_Reference/WP_Admin_Bar
	global $wp_admin_bar;

	// $wp_admin_bar->add_menu( $args )
	// Made an associative array
	$wp_admin_bar->add_menu( array(
		'id'    => 'google_analytics',
		'title' => 'Google Analytics',
		'href'  => 'https://www.google.com/analytics'
		); );
}

// our hook
// https://developer.wordpress.org/reference/functions/add_action/
// https://developer.wordpress.org/reference/functions/wp_admin_bar_render/
add_action('wp_bfore_admin_bar_render', 'dwwp_add_google_link');


?>