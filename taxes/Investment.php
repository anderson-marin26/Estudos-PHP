<?php

 	interface Investment
 	{
		public function calculate(Account $account);
	}

	class Conservative implements Investment
	{
		public function calculate(Account $account)
		{
			return $account->getBalance() * 0.008;
		} 
	}

	class Moderate implements Investment
	{
		private $random;

		public function calculate(Account $account)
		{
			$this->random = mt_rand(1,100);
			if($this->random >= 50)
			{
				return $account->getBalance() * 0.025;
			}
			else 
			{
				return $account->getBalance() * 0.007;
			}
		}
	}

	class Bold implements Investment
	{
		private $random;

		public double calculate(Account account)
		{
			$this->random = mt_rand(1,100);
			if($this->random >= 1 && $this->random <= 20)
			{
				return $account->getBalance() * 0.5;
			}
			else if($this->random > 20 && $this->random <= 50)
			{
				return $account->getBalance() * 0.3;
			}
			else
			{
				return $account->getBalance() * 0.006;
			}
		}
	}