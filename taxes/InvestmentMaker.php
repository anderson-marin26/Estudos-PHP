 <?php
	class InvestmentMaker
	{
		public function Invest(Account $account, Investment $investment)
		{
			$result = $investment->calculate($account);

			$account->deposit($result * 0.75 );
			return $account->getBalance();
		}
	}