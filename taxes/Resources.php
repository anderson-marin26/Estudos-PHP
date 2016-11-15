<?php

	Class Resources
	{
		private $value;

		function __construct($new_value) {
			$this->value = $new_value;
		}

		public function getValue() {
			return $this->value;
		}
	}