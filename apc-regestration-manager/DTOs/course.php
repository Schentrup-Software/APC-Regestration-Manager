<?php

require_once 'base.php';

class apcrm_course extends apcrm_base {
	private $course_type;
	private $agency;
	private $address_line_one;
	private $address_line_two;
	private $city;
	private $state;
	private $zip;
	private $start_date;
	private $end_date;
	private $eventbrite_url;

	function apcrm_get_course_type() {
		return $this->course_type;
	}

	function apcrm_set_course_type($course_type) {
		$this->course_type = $course_type;
	}

	function apcrm_get_agency() {
		return $this->agency;
	}

	function apcrm_set_agency($agency) {
		$this->agency = $agency;
	}

	function apcrm_get_address_line_one() {
		return $this->address_line_one;
	}

	function apcrm_set_address_line_one($address_line_one) {
		$this->address_line_one = $address_line_one;
	}

	function apcrm_get_address_line_two() {
		return $this->address_line_two;
	}

	function apcrm_set_address_line_two($address_line_two) {
		$this->address_line_two = $address_line_two;
	}

	function apcrm_get_city() {
		return $this->city;
	}

	function apcrm_set_city($city) {
		$this->city = $city;
	}

	function apcrm_get_state() {
		return $this->state;
	}

	function apcrm_set_state($state) {
		$this->state = $state;
	}

	function apcrm_get_zip() {
		return $this->zip;
	}

	function apcrm_set_zip($zip) {
		$this->zip = $zip;
	}

	function apcrm_get_start_date() {
		return $this->start_date;
	}

	function apcrm_set_start_date($start_date) {
		$this->start_date = $start_date;
	}

	function apcrm_get_end_date() {
		return $this->end_date;
	}

	function apcrm_set_end_date($end_date) {
		$this->end_date = $end_date;
	}

	function apcrm_get_eventbrite_url() {
		return $this->eventbrite_url;
	}

	function apcrm_set_eventbrite_url($eventbrite_url) {
		$this->eventbrite_url = $eventbrite_url;
	}

	function __toString() {
		return $this->course_type . " " .
		$this->agency . " " .
		$this->address_line_one . " " .
		$this->address_line_two . " " .
		$this->city . " " .
		$this->state . " " .
		$this->zip . " " .
		$this->start_date . " " .
		$this->end_date . " " .
		$this->eventbrite_url;
	}
}

?>
