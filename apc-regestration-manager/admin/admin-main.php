<?php

require_once 'admin-form.php';
require_once 'admin-table.php';
require_once __DIR__ . '/../DTOs/course.php';

define('APCRM_COURSES_FORM_ID', 'apcrm_courses');
define("APCRM_COURSES_TYPES", [
    "Supervisor Report Review",
 	"Advanced Interview and Interrogation",
 	"Homicide Investigations Seminar",
 	"Child Sexual Exploitation Investigations",
 	"Advanced Field Training Officer Course",
 	"Street Crimes & Proactive Patrol"
]);
define("APCRM_ACCESS_TYPES", [
    "Online",
 	"In person"
]);

/**
 * Renders the admin page
 *
 * @return void
 */
function apcrm_admin_page_init() {
	$first_thing = new apcrm_course();
	$first_thing->apcrm_set_course_type(APCRM_COURSES_TYPES[0]);
	$first_thing->apcrm_set_access_type("In person");
	$first_thing->apcrm_set_agency("Gainesville Police Dept.");
	$first_thing->apcrm_set_address_line_one("1234 Test St.");
	$first_thing->apcrm_set_address_line_two("");
	$first_thing->apcrm_set_city("Gainesville");
	$first_thing->apcrm_set_state("FL");
	$first_thing->apcrm_set_zip("12345");
	$first_thing->apcrm_set_start_date("12-12-2012 12:12:12");
	$first_thing->apcrm_set_end_date("12-14-2012 14:14:14");
	$first_thing->apcrm_set_cost("59");
	$first_thing->apcrm_set_registration_url("http://yahoo.com");

	$second_thing = new apcrm_course();
	$second_thing->apcrm_set_course_type(APCRM_COURSES_TYPES[3]);
	$second_thing->apcrm_set_access_type("In person");
	$second_thing->apcrm_set_agency("Gainesville Police Dept.");
	$second_thing->apcrm_set_address_line_one("1234 Foo Bar St.");
	$second_thing->apcrm_set_address_line_two("");
	$second_thing->apcrm_set_city("Gainesville");
	$second_thing->apcrm_set_state("FL");
	$second_thing->apcrm_set_zip("12555");
	$second_thing->apcrm_set_start_date("2020-02-02T12:12:12");
	$second_thing->apcrm_set_end_date("2020-02-02T12:12:12");
	$second_thing->apcrm_set_cost("259");
	$second_thing->apcrm_set_registration_url("http://google.com");

	$some_things = array($first_thing, $second_thing);

	wp_enqueue_style('apcrm_admin_style', plugin_dir_url(__FILE__) . 'admin-style.css');

	apcrm_admin_render_header();
	?> <div class="wrap row"> <?php
	apcrm_admin_render_form(APCRM_COURSES_FORM_ID, $second_thing);
	apcrm_admin_render_table($some_things);
	?> </div> <?php
}

function apcrm_admin_render_header() {
	?>
		<div class="wrap">
			<h1>APC Regestration Manager</h1>
			<hr>
		</div>
	<?php
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST[APCRM_COURSES_FORM_ID]) {
		$greatthing = new apcrm_course();
		$greatthing->apcrm_load_from_array($_POST);
	}
}

?>
