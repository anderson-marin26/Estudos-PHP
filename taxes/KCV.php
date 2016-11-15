<?php

	class KCV implements Tax
	{
		public function calculate(Resources $Resources)
		{
			return $Resources->getValue() * 0.2;
		}
	}