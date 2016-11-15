<?php

	class TaxesCalculator
	{
		public function calculate(Resources $Resources, Tax $tax)
		{
			return $tax->calculate($Resources);
		}
	}