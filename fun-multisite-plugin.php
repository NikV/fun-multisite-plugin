<?php
/**
 * Plugin Name: Fun multisite plugin
 */

/**
 * @param $wp_admin_bar
 */
function wp_ms_new_site_node( $wp_admin_bar ) {
	$args = array(
		'id'     => 'new-site',     // id of the existing child node (New > Post)
		'title'  => 'New Site', // alter the title of existing node
		'parent' => 'network-admin',          // set parent to false to make it a top level (parent) node
		'href'   => admin_url('/network/site-new.php'),
	);
	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'wp_ms_new_site_node', 999 );
