<?php
/**
 * Plugin Name: APC Registration Manager
 * Description: A plugin used by APC to manage registrations
 * Version: 1.0
 * Author: Schentrup Software LLC
 **/

define('APCRM_COURSES_FORM_ID', 'apcrm_courses');
define('APCRM_QUERY_COURSE_ID', 'apcrm_course_id');
define("APCRM_COURSES_TYPES", [
	"Supervisor Report Review",
 	"Advanced Interview and Interrogation",
 	"Homicide Investigations Seminar",
 	"Child Sexual Exploitation Investigations",
 	"Advanced Field Training Officer Course",
 	"Street Crimes & Proactive Patrol"
]);
define("APCRM_COURSES_TYPES_URLS", [
	"/course-descriptions/supervisor-report-review",
 	"/course-descriptions/advanced-interview-and-interrogation",
 	"/course-descriptions/homicide-investigations-seminar",
 	"/course-descriptions/child-sexual-exploitation-investigations",
 	"/course-descriptions/advanced-field-training-officer-course",
 	"/course-descriptions/street-crimes-proactive-patrol"
]);
define("APCRM_ACCESS_TYPES", [
    "Online",
 	"In person"
]);

require_once 'admin/admin-main.php';
require_once 'repository/repository-courses.php';
require_once 'registration-page/registration-page-main.php';

add_action('admin_init', 'apcrm_plugin_init');
add_action('admin_menu', 'apcrm_plugin_setup_menu');
add_shortcode('apcrm_registration_page', 'apcrm_registration_page_func');

/**
 * Run on plugin activation
 *
 * @return void
 */
function apcrm_plugin_init() {
	apcrm_init_regestrations_table();
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

function apcrm_registration_page_func($atts) {
	apcrm_registration_page_init($atts);
}
