<?php

function apcrm_admin_render_table($array_of_courses) {
	?>
	<div class='currentCoursesContainer wrapingBorder'>
		<h2>Current courses</h2>
		<table id='currentCoursesTable'>
			<thead>
				<tr>
					<th>Course Type</th>
					<th>Agency</th>
					<th>Address</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Eventbrite</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach	($array_of_courses as $course) {
					echo '<tr>';
					echo '<th>' . $course->apcrm_get_course_type() . '</th>';
					echo '<th>' . $course->apcrm_get_agency() . '</th>';
					echo '<th>' .
						$course->apcrm_get_address_line_one() . ' ' .
						$course->apcrm_get_address_line_two() . '\n' .
						$course->apcrm_get_city() . ', ' .
						$course->apcrm_get_state() . ' ' .
						$course->apcrm_get_zip() . '</th>';
					echo '<th>' . $course->apcrm_get_start_date() . '</th>';
					echo '<th>' . $course->apcrm_get_end_date() . '</th>';
					echo '<th><a href="' . $course->apcrm_get_eventbrite_url() . '">Go to</a></th>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	<?php
}

?>
