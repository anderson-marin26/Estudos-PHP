<?php

	class ISS implements Tax
	{
		public function calculate(Resources $Resources)
		{
			return $Resources->getValue() * 0.1;
		}
	}