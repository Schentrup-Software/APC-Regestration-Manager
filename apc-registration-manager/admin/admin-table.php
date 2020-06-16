<?php

function apcrm_admin_render_table($query_param_id, $array_of_courses) {
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('td[data-table-button=update]').click( function () {
				const urlParams = new URLSearchParams(window.location.search);
				urlParams.set('<?php echo $query_param_id ?>', $(this).parent().find('#course_id').text());
				window.location.search = urlParams;
			});
			$('td[data-table-button=delete]').click( function () {
				const urlParams = new URLSearchParams(window.location.search);
				urlParams.set('<?php echo $query_param_id ?>', $(this).parent().find('#course_id').text());
				$.ajax({
					url: '?' + urlParams,
					type: 'DELETE'
				});
				$(this).parent().remove()
			});
		});
	</script>
	<div class='currentCoursesContainer wrapingBorder'>
		<h2>Current courses</h2>
		<table id='currentCoursesTable'>
			<thead>
				<tr>
					<th>Course Type</th>
					<th>Access Type</th>
					<th>Agency</th>
					<th>Address</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Cost</th>
					<th>Registration</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach	($array_of_courses as $course) {
					echo '<tr>';
						echo '<td data-table-button="update">' . $course->apcrm_get_course_type() . '</td>';
						echo '<td data-table-button="update">' . $course->apcrm_get_access_type() . '</td>';
						echo '<td data-table-button="update">' . $course->apcrm_get_agency() . '</td>';
						if($course->apcrm_get_address_line_one()) {
							echo '<td data-table-button="update">' .
								$course->apcrm_get_address_line_one() . ' ' .
								$course->apcrm_get_address_line_two() . '<br>' .
								$course->apcrm_get_city() . ', ' .
								$course->apcrm_get_state() . ' ' .
								$course->apcrm_get_zip() . '</td>';
						} else {
							echo '<td data-table-button="update"></td>';
						}
						echo '<td data-table-button="update">' . $course->apcrm_get_start_date() . '</td>';
						echo '<td data-table-button="update">' . $course->apcrm_get_end_date() . '</td>';
						echo '<td data-table-button="update">$' . $course->apcrm_get_cost() . '</td>';
						echo '<td data-table-button="update"><a href="' . $course->apcrm_get_registration_url() . '">Go to</a></td>';
						echo '<td data-table-button="delete">&#10060</td>';

						echo '<td id="course_id" hidden>' . $course->apcrm_get_id() . '</td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	<?php
}

?>
