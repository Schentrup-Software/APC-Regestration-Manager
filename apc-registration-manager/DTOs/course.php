<?php

require_once 'base.php';

class apcrm_course extends apcrm_base {
	private $id;
	private $course_type;
	private $access_type;
	private $agency;
	private $address_line_one;
	private $address_line_two;
	private $city;
	private $state;
	private $zip;
	private $start_date;
	private $end_date;
	private $cost;
	private $registration_url;

	function apcrm_get_id() {
		return $this->id;
	}

	function apcrm_set_id($id) {
		$this->id = $id;
	}

	function apcrm_get_course_type() {
		return $this->course_type;
	}

	function apcrm_set_course_type($course_type) {
		$this->course_type = $this->apcrm_clean_input($course_type);
	}

	function apcrm_get_course_type_url() {
		$index = 0;
		foreach	(APCRM_COURSES_TYPES as $type) {
			if($type == $this->course_type)
				return APCRM_COURSES_TYPES_URLS[$index];
			else
				$index++;
		}
		throw new Exception('Invalid course type: ' . $this->course_type);
	}

	function apcrm_get_access_type() {
		return $this->access_type;
	}

	function apcrm_set_access_type($access_type) {
		$this->access_type = $this->apcrm_clean_input($access_type);
	}

	function apcrm_get_agency() {
		return $this->agency;
	}

	function apcrm_set_agency($agency) {
		$this->agency = $this->apcrm_clean_input($agency);
	}

	function apcrm_get_address_line_one() {
		return $this->address_line_one;
	}

	function apcrm_set_address_line_one($address_line_one) {
		$this->address_line_one = $this->apcrm_clean_input($address_line_one);
	}

	function apcrm_get_address_line_two() {
		return $this->address_line_two;
	}

	function apcrm_set_address_line_two($address_line_two) {
		$this->address_line_two = $this->apcrm_clean_input($address_line_two);
	}

	function apcrm_get_city() {
		return $this->city;
	}

	function apcrm_set_city($city) {
		$this->city = $this->apcrm_clean_input($city);
	}

	function apcrm_get_state() {
		return $this->state;
	}

	function apcrm_set_state($state) {
		$this->state = $this->apcrm_clean_input($state);
	}

	function apcrm_get_zip() {
		return $this->zip;
	}

	function apcrm_set_zip($zip) {
		$this->zip = $this->apcrm_clean_input($zip);
	}

	function apcrm_get_start_date() {
		return $this->start_date;
	}

	function apcrm_set_start_date($start_date) {
		$this->start_date = $this->apcrm_clean_input($start_date);
	}

	function apcrm_get_end_date() {
		return $this->end_date;
	}

	function apcrm_set_end_date($end_date) {
		$this->end_date = $this->apcrm_clean_input($end_date);
	}

	function apcrm_get_cost() {
		return $this->cost;
	}

	function apcrm_set_cost($cost) {
		$this->cost = $this->apcrm_clean_input($cost);
	}

	function apcrm_get_registration_url() {
		return $this->registration_url;
	}

	function apcrm_set_registration_url($registration_url) {
		$this->registration_url = $this->apcrm_clean_input($registration_url);
	}
}

?>
