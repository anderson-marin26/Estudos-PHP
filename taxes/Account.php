<?php
	class Conta
	{
		private $balance;

		public function deposits($value)
		{
			$this->balance += $value;
		}

		public function getBalance()
		{
			return $this->value;
		}
}