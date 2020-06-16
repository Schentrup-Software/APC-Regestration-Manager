<?php

require_once 'admin-form.php';
require_once 'admin-table.php';
require_once __DIR__ . '/../DTOs/course.php';
require_once __DIR__ . '/../repository/repository-courses.php';

/**
 * Renders the admin page
 *
 * @return void
 */
function apcrm_admin_page_init() {
	$current_courses = apcrm_get_courses();
	$current_course = isset($_GET[APCRM_QUERY_COURSE_ID]) ? apcrm_get_course($_GET[APCRM_QUERY_COURSE_ID]) : new apcrm_course();
	wp_enqueue_style('apcrm_admin_style', plugin_dir_url(__FILE__) . 'admin-style.css');

	apcrm_admin_render_header();
	?> <div class="wrap row"> <?php
	apcrm_admin_render_form(APCRM_COURSES_FORM_ID, $current_course);
	apcrm_admin_render_table(APCRM_QUERY_COURSE_ID, $current_courses);
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
	if(isset($_POST[APCRM_COURSES_FORM_ID])) {
		$course = new apcrm_course();
		$course->apcrm_load_from_array($_POST);
		apcrm_upsert_course($course);
	}
}

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
	if(isset($_GET[APCRM_QUERY_COURSE_ID])) {
		apcrm_delete_course($_GET[APCRM_QUERY_COURSE_ID]);
	}
}

?>
