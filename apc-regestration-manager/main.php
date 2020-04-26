<?php
/**
 * Plugin Name: APC Registration Manager
 * Description: A plugin used by APC to manage registrations
 * Version: 1.0
 * Author: Schentrup Software LLC
 **/

require_once 'admin/admin-main.php';

add_action( 'admin_init', 'apcrm_plugin_init' );
add_action('admin_menu', 'apcrm_plugin_setup_menu');

/**
 * Run on plugin activation
 *
 * @return void
 */
function apcrm_plugin_init() {

}

/**
 * Sets up the panel on the admin page
 *
 * @return void
 */
function apcrm_plugin_setup_menu() {
	add_management_page(
		'APC Registration Manager Page',
		'APC Registration',
		'manage_options',
		'apcrm-plugin',
		'apcrm_admin_page_init'
	);
}
