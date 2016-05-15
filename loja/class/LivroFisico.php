<?php
	class LivroFisico extends Livro{
		public $taxaDeImpressao;

		public function calculaPrecoDeVenda(){
			return $this->getPreco() + $this->getPreco() * 0.1;
		}
	}
?>