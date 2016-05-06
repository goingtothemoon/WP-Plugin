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
// This removes something from the WP dashboard

function dwwp_remove_dashoard_widget() {
	//do something
	//remove_meta_box( $id, $page, $context )
	remove_meta_box( 'dashboard_primary', 'dashboard', 'post_container_1' );
}
// our hook
// add_action( $hook, $function_to_add, $priority, $accepted_args )
add_action( 'wp_dashboard_setup', 'dwwp_remove_dashoard_widget' );


?>