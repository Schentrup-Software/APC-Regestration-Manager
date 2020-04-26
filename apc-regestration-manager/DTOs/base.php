<?php

class apcrm_base {
	public function apcrm_load_from_array($array) {
		$class = new ReflectionClass(get_class($this));
		$props = $class->getProperties();
		foreach($props as $p) {
			 if (isset($array[$p->getName()]))
			 	$this->{'apcrm_set_' . $p->getName()}($this->apcrm_clean_input($array[$p->getName()]));
		}
	}

	public function apcrm_clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}

?>
