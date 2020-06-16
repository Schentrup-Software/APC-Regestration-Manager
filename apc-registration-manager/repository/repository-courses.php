<?php

require_once ABSPATH . 'wp-admin/includes/upgrade.php';
require_once __DIR__ . '/../DTOs/course.php';

define('COURSE_TABLE_NAME', "{$wpdb->base_prefix}apcrm_courses");

function apcrm_init_regestrations_table() {
	global $wpdb;

	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE " . COURSE_TABLE_NAME . " (
		id INT NOT NULL AUTO_INCREMENT,
		course_type varchar(255) NOT NULL,
		access_type varchar(255) NOT NULL,
		agency varchar(255) NOT NULL,
		address_line_one varchar(255),
		address_line_two varchar(255),
		city varchar(255),
		state varchar(2),
		zip varchar(5),
		start_date datetime NOT NULL,
		end_date datetime NOT NULL,
		cost INT NOT NULL,
		registration_url varchar(255) NOT NULL,
		PRIMARY KEY  (id)
		) $charset_collate;";

	dbDelta($sql);
}

function apcrm_upsert_course($course) {
	global $wpdb;

	if($course->apcrm_get_id()) {
		$wpdb->update(
			COURSE_TABLE_NAME,
			apcrm_course_to_array($course),
			array( 'id' => $course->apcrm_get_id() )
		);
	}
	else {
		$wpdb->insert(
			COURSE_TABLE_NAME,
			apcrm_course_to_array($course)
		);
	}
}

function apcrm_get_courses() {
	global $wpdb;

	$queryResults = $wpdb->get_results(
		"SELECT
			`id`,
			`course_type`,
			`access_type`,
			`agency`,
			`address_line_one`,
			`address_line_two`,
			`city`,
			`state`,
			`zip`,
			`start_date`,
			`end_date`,
			`cost`,
			`registration_url`
		FROM " . COURSE_TABLE_NAME,
		ARRAY_A
	);

	$courseResults = array();

	foreach ($queryResults as $queryResult) {
		$course = new apcrm_course();
		$course->apcrm_load_from_array($queryResult);
		array_push($courseResults, $course);
	}

	return $courseResults;
}

function apcrm_get_course($id) {
	global $wpdb;

	$queryResult = $wpdb->get_row(
		$wpdb->prepare(
			"SELECT
				`id`,
				`course_type`,
				`access_type`,
				`agency`,
				`address_line_one`,
				`address_line_two`,
				`city`,
				`state`,
				`zip`,
				`start_date`,
				`end_date`,
				`cost`,
				`registration_url`
				FROM " . COURSE_TABLE_NAME . "
				WHERE `id` = %d",
			$id
		),
		ARRAY_A
	);

	$course = new apcrm_course();
	$course->apcrm_load_from_array($queryResult);

	return $course;
}

function apcrm_delete_course($id) {
	global $wpdb;

	$wpdb->delete( COURSE_TABLE_NAME, array( 'id' => $id ) );
}

function apcrm_course_to_array($course) {
	return array(
		'course_type' => $course->apcrm_get_course_type(),
		'access_type' => $course->apcrm_get_access_type(),
		'agency' => $course->apcrm_get_agency(),
		'address_line_one' => $course->apcrm_get_address_line_one(),
		'address_line_two' => $course->apcrm_get_address_line_two(),
		'city' => $course->apcrm_get_city(),
		'state' => $course->apcrm_get_state(),
		'zip' => $course->apcrm_get_zip(),
		'start_date' => $course->apcrm_get_start_date(),
		'end_date' => $course->apcrm_get_end_date(),
		'cost' => $course->apcrm_get_cost(),
		'registration_url' => $course->apcrm_get_registration_url()
	);
}

?>
