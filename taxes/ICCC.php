<?php

	class ICCC implements Tax
	{
		public function calculate(Resources $Resources)
		{
			$result = 0;
			$resource = $Resources->getValue();

			if($resource <= 1000)
			{
				$result = $resource * 0.05;
			}
			else if($resource >= 1000 && $resource <= 3000)
			{
				$result = $resource * 0.07;
			}
			else
			{
				$result = $resource * 0.08 + 30;
			}

			return $result;
		}
	}