<?php

require_once __DIR__ . '/../repository/repository-courses.php';

function apcrm_registration_page_init($atts) {
    $current_courses = apcrm_get_courses();
}

?>
