<?php

class apcrm_base {
	public function loadFromArray($array) {
		$class = new ReflectionClass(get_class($this));
		$props = $class->getProperties();
		foreach($props as $p) {
			 if (isset($array[$p->getName()]))
				$p->setValue($this, $array[$p->getName]);
		}
	}
}

?>