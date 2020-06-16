<?php

function apcrm_registration_page_render($courses) {
	?>
		<div class="registration-page">
		<?php
			foreach	($array_of_courses as $course) {
				echo '<tr>';
				echo '<td data-table-button="update">' . $course->apcrm_get_course_type() . '</td>';
				echo '<td data-table-button="update">' . $course->apcrm_get_access_type() . '</td>';
				echo '<td data-table-button="update">' . $course->apcrm_get_agency() . '</td>';
				echo '<hr class="wp-block-separator is-style-wide">';
			}
			?>
		</div>
	<?php
}

?>
