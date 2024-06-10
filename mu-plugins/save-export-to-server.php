<?php
/*
Plugin Name: Save Export to server
Description: New export behavior to save the export file on the server.
*/

/**
 * Adds a "Export to server" link to the Toolbar.
 *
 * @param WP_Admin_Bar $wp_admin_bar Toolbar instance.
 * @see   https://developer.wordpress.org/reference/classes/wp_admin_bar/add_node/
 */
function save_export_to_server_admin_bar_menu( $wp_admin_bar ) {
	$args = array(
		'id'    => 'save_export_to_server',
		'title' => __( ' 💾 Save Export to server 🤖 ', 'save-export-to-server' ),
		'href'  => admin_url( 'export.php?save-export-to-server=1' ),
		'meta'  => array(
			'class' => 'save-export-to-server warning error',
		),
	);
	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'save_export_to_server_admin_bar_menu', 999 );


// Hook into the export_wp function
add_action( 'admin_init', 'save_export_to_server' );

function save_export_to_server( $args = array() ) {
	if ( ! isset( $_GET['save-export-to-server'] ) ) {
		return;
	}

	/** Load WordPress export API */
	require_once ABSPATH . 'wp-admin/includes/export.php';

	// global $wpdb, $post;

	$defaults = array(
		'content' => 'all',
	);
	$args     = wp_parse_args( $args, $defaults );

	// Generate the export data.
	ob_start();
	export_wp( $args );
	$export_data = ob_get_clean();

	// Save the export data to a file on the server.
	$path = WP_CONTENT_DIR . '/demo-data';
	mkdir( $path );
	$file_path = $path . '/GatherPress-demo-data-2024.xml';
	file_put_contents( $file_path, $export_data );

	// Redirect to success page.
	wp_redirect( admin_url( 'export.php?save-export-to-server-success=' . rawurlencode( $file_path ) ) );
	exit;
}




add_action( 'admin_notices', 'save_export_to_server_admin_notice' );
function save_export_to_server_admin_notice() {
	if ( ! isset( $_GET['save-export-to-server-success'] ) || ! file_exists( rawurldecode( $_GET['save-export-to-server-success'] ) ) ) {
		return;
	}
	printf(
		'<div class="notice notice-success"><p>Export saved successfully to %s!</p></div>',
		$_GET['save-export-to-server-success']
	);
}
