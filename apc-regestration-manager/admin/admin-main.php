<?php

require_once 'admin-form.php';
require_once 'admin-table.php';
require_once __DIR__ . '/../DTOs/course.php';

/**
 * Renders the admin page
 *
 * @return void
 */
function apcrm_admin_page_init() {
	$first_thing = new apcrm_course();
	$first_thing->apcrm_set_course_type("Andvaned interveiw and interigation");
	$first_thing->apcrm_set_agency("Gainesville Police Dept.");
	$first_thing->apcrm_set_address_line_one("1234 Test St.");
	$first_thing->apcrm_set_address_line_two("");
	$first_thing->apcrm_set_city("Gainesville");
	$first_thing->apcrm_set_state("FL");
	$first_thing->apcrm_set_zip("12345");
	$first_thing->apcrm_set_start_date("12-12-2012 12:12:12");
	$first_thing->apcrm_set_end_date("12-14-2012 14:14:14");

	$second_thing = new apcrm_course();
	$second_thing->apcrm_set_course_type("Street crimes");
	$second_thing->apcrm_set_agency("Gainesville Police Dept.");
	$second_thing->apcrm_set_address_line_one("1234 Foo Bar St.");
	$second_thing->apcrm_set_address_line_two("");
	$second_thing->apcrm_set_city("Gainesville");
	$second_thing->apcrm_set_state("FL");
	$second_thing->apcrm_set_zip("12555");
	$second_thing->apcrm_set_start_date("12-12-2020 12:12:12");
	$second_thing->apcrm_set_end_date("12-14-2020 14:14:14");

	$some_things = array($first_thing, $second_thing);

	wp_enqueue_style('apcrm_admin_style', plugin_dir_url(__FILE__) . 'admin-style.css');
	apcrm_admin_render_header();
	?> <div class="wrap row"> <?php
	apcrm_admin_render_form();
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

?>
