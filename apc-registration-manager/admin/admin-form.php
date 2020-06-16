<?php

/**
 * Renders the form portion of the admin page
 *
 * @return void
 */
function apcrm_admin_render_form($form_id, $course) {
	?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".reset").click(function() {
					$('form').find("input[type=radio]").prop("checked", false);
					$('form').find("input[type=text]").val("");
					$('form').find("input[type=datetime-local]").val("");
					$('form').find("input[type=number]").val("");
				});
			});
		</script>
		<div class="addNewCourseContainer wrapingBorder">
			<h2>Add new course</h2>
			<form method="post" action=" ">
				<label class="courseInputLabels">Course type:</label>
				<div class="courseInput">
					<?php
					foreach	(APCRM_COURSES_TYPES as $type) {
						echo '<input type="radio"';
						echo 'id="' . $type . ' Input"';
						echo 'name="course_type"';
						echo 'value="' . $type . '"';
						if($course->apcrm_get_course_type() == $type) echo 'checked';
						echo '>';
						echo '<label for="' . $type . ' Input">' . $type . '</label>';
						echo '<br>';
					}
					?>
				</div>
				<label class="courseInputLabels">Access type:</label>
				<div class="courseInput">
					<?php
					foreach	(APCRM_ACCESS_TYPES as $type) {
						echo '<input type="radio"';
						echo 'id="' . $type . ' Input"';
						echo 'name="access_type"';
						echo 'value="' . $type . '"';
						if($course->apcrm_get_access_type() == $type) echo 'checked';
						echo '>';
						echo '<label for="' . $type . ' Input">' . $type . '</label>';
						echo '<br>';
					}
					?>
				</div>
				<label class="courseInputLabels" for="agencyInput">Agency:</label>
				<br>
				<input
					type="text"
					class="largeCourseInput"
					id="agencyInput"
					name="agency"
					value="<?php echo $course->apcrm_get_agency()?>"
					required
				>
				<br>
				<label class="courseInputLabels" for="addressLineOneInput">Address Line 1:</label>
				<br>
				<input
					type="text"
					class="largeCourseInput"
					id="addressLineOneInput"
					name="address_line_one"
					value="<?php echo $course->apcrm_get_address_line_one()?>"
				>
				<br>
				<label class="courseInputLabels" for="addressLineTwoInput">Address Line 2:</label>
				<br>
				<input
					type="text"
					class="largeCourseInput"
					id="addressLineTwoInput"
					name="address_line_two"
					value="<?php echo $course->apcrm_get_address_line_two()?>"
				>
				<br>
				<div class="row">
					<div class="columnCity">
						<label class="courseInputLabels leftColumn" for="CityInput">City:</label>
						<br>
						<input
							type="text"
							class="courseInput leftColumn"
							id="cityInput"
							name="city"
							value="<?php echo $course->apcrm_get_city()?>"
						>
					</div>
					<div class="columnState">
						<label class="courseInputLabels rightColumn" for="stateInput">State:</label>
						<br>
						<input
							type="text"
							class="courseInput rightColumn"
							id="stateInput"
							name="state"
							value="<?php echo $course->apcrm_get_state()?>"
							minlength="2"
							maxlength="2"
						>
					</div>
					<div class="columnZip">
						<label class="courseInputLabels" for="zipInput">Zip:</label>
						<br>
						<input
							type="text"
							class="courseInput rightColumn"
							id="zipInput"
							name="zip"
							value="<?php echo $course->apcrm_get_zip()?>"
							minlength="5"
							maxlength="5"
						>
					</div>
				</div>
				<label class="courseInputLabels" for="startDateInput">Start Date & Time:</label>
				<br>
				<input
					type="datetime-local"
					class="courseInput"
					id="startDateInput"
					name="start_date"
					value="<?php echo $course->apcrm_get_start_date()?>"
					required
				>
				<br>
				<label class="courseInputLabels" for="endDateInput">End Date & Time:</label>
				<br>
				<input
					type="datetime-local"
					class="courseInput"
					id="endDateInput"
					name="end_date"
					value="<?php echo $course->apcrm_get_end_date()?>"
					required
				>
				<br>
				<label class="courseInputLabels" for="costInput">Cost:</label>
				<br>
				<input
					type="number"
					class="courseInput"
					id="costInput"
					name="cost"
					value="<?php echo $course->apcrm_get_cost()?>"
					required
				>
				<br>
				<input
					type="text"
					id="registrationUrlInput"
					name="registration_url"
					value="<?php echo $course->apcrm_get_registration_url()?>"
					hidden
				>
				<input
					type="number"
					id="idInput"
					name="id"
					value="<?php echo $course->apcrm_get_id()?>"
					hidden
				>
				<div class="row">
					<div class="columnButtons">
						<input type="submit" class="courseInput leftColumn" name="<?php echo $form_id?>" value="Submit">
					</div>
					<div class="columnButtons">
						<input type="button" class="courseInput rightColumn reset" value="Clear">
					</div>
				</div>
			</form>
		</div>
	<?php
}

?>
