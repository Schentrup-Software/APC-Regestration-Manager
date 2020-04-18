<?php

/**
 * Renders the form portion of the admin page
 *
 * @return void
 */
function apcrm_admin_render_form() {
	?>
		<div class="addNewCourseContainer wrapingBorder">
			<h2>Add new course</h2>
			<form>
				<label class="courseInputLabels">Course type:</label>
				<div class="courseInput">
					<input 
						type="radio"
						id="supervisorReportReviewInput" 
						name="courseType" 
						value="Supervisor Report Review"
					>
					<label for="supervisorReportReviewInput">Supervisor Report Review</label>
					<br>
					<input 
						type="radio"
						id="advancedInterviewAndInterrogationInput" 
						name="courseType" 
						value="Advanced Interview and Interrogation"
					>
					<label for="advancedInterviewAndInterrogationInput">Advanced Interview and Interrogation</label>
					<br>
					<input 
						type="radio"
						id="homicideInvestigationsSeminarInput" 
						name="courseType" 
						value="Homicide Investigations Seminar"
					>
					<label for="homicideInvestigationsSeminarInput">Homicide Investigations Seminar</label>
					<br>
					<input 
						type="radio"
						id="childSexualExploitationInvestigationsInput" 
						name="courseType" 
						value="Child Sexual Exploitation Investigations"
					>
					<label for="childSexualExploitationInvestigationsInput">Child Sexual Exploitation Investigations</label>
					<br>
					<input 
						type="radio" 
						id="advancedFieldTrainingOfficerCourseInput" 
						name="courseType" 
						value="Advanced Field Training Officer Course"
					>
					<label for="advancedFieldTrainingOfficerCourseInput">Advanced Field Training Officer Course</label>
					<br>
					<input 
						type="radio"
						id="streetCrimesAndProactivePatrolInput" 
						name="courseType" 
						value="Street Crimes & Proactive Patrol"
					>
					<label for="streetCrimesAndProactivePatrolInput">Street Crimes & Proactive Patrol</label>
					<br>
				</div>
				<label class="courseInputLabels" for="agencyInput">Agency:</label><br>
				<input 
					type="text" 
					class="largeCourseInput"
					id="agencyInput" 
					name="agency"
					required
				>
				<br>
				<label class="courseInputLabels" for="addressLineOneInput">Address Line 1:</label><br>
				<input 
					type="text" 
					class="largeCourseInput"
					id="addressLineOneInput" 
					name="addressLineOne"
					required
				>
				<br>
				<label class="courseInputLabels" for="addressLineTwoInput">Address Line 2:</label><br>
				<input 
					type="text" 
					class="largeCourseInput"
					id="addressLineTwoInput" 
					name="addressLineTwo"
				>
				<br>
				<div class="row">
					<div class="columnCity">
						<label class="courseInputLabels leftColumn" for="CityInput">City:</label><br>
						<input 
							type="text" 
							class="courseInput leftColumn"
							id="cityInput" 
							name="city"
							required
						>
					</div>
					<div class="columnState">
						<label class="courseInputLabels rightColumn" for="stateInput">State:</label><br>
						<input 
							type="text" 
							class="courseInput rightColumn"
							id="stateInput" 
							name="state"
							required
							minlength="2"
							maxlength="2"
						>
					</div>
					<div class="columnZip">
						<label class="courseInputLabels" for="zipInput">Zip:</label><br>
						<input 
							type="text"
							class="courseInput rightColumn"
							id="zipInput"
							name="zip"
							required
							minlength="5" 
							maxlength="5"
						>
					</div>
				</div>
				<label class="courseInputLabels" for="startDateInput">Start Date & Time:</label><br>
				<input 
					type="datetime-local"
					class="courseInput"
					id="startDateInput"
					name="startDate"
					required
				>
				<br>
				<label class="courseInputLabels" for="endDateInput">End Date & Time:</label><br>
				<input 
					type="datetime-local"
					class="courseInput"
					id="endDateInput"
					name="endDate"
					required
				>
				<br>
				<input type="submit" class="courseInput" value="Submit">
			</form>
		</div>
	<?php
}
?>