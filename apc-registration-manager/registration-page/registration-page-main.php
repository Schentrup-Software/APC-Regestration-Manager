<?php

require_once __DIR__ . '/../repository/repository-courses.php';
require_once 'registration-page.php';

function apcrm_registration_page_init($atts) {
	$current_courses = apcrm_get_courses();
	apcrm_registration_page_render($current_courses);
}

?>
