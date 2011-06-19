<?php
/*
Plugin Name: Add From Server
Version: 3.2.0
Plugin URI: http://hulse.com.au/plugins/add-from-server/
Description: Plugin to allow the Media Manager to add files from the webservers filesystem. <strong>Note:</strong> All files are copied to the uploads directory.
Author: Dion Hulse
Author URI: http://hulse.com.au/
*/

add_action('plugins_loaded', 'afs_load');
function afs_load() {
	if ( is_admin() ) {
		include 'class.add-from-server.php';
		$GLOBALS['add-from-server'] = new add_from_server( plugin_basename(__FILE__) );
	}
}

// Activation hook for pre-3.1 users to bugger off?
