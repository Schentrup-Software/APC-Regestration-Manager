<?php

function apcrm_registration_page_render($courses) {
	?>
		<div class="registration-page">
		<?php
			$counter = 1;
			foreach	($courses as $course) {
				echo '<a href="' . $course->apcrm_get_course_type_url() . '">' . $course->apcrm_get_course_type() . '</a>';
				if($course->apcrm_get_access_type() == "Online") {
					echo ' - APC Online Academy';
				}
				echo '<br>';
				if($course->apcrm_get_access_type() == "In person") {
					echo 'Agency: ' . $course->apcrm_get_agency();
					echo '<br>';
				}
				echo 'Start: ' . date("m/d/Y H:i", strtotime($course->apcrm_get_start_date()));
				echo '<br>';
				echo 'End: ' . date("m/d/Y H:i", strtotime($course->apcrm_get_end_date()));
				if(sizeof($courses) != $counter++) echo '<hr>';
			}
			?>
		</div>
	<?php
}

?>
