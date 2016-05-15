<?php
	class Ebook extends Livro{
		public $marcaDaAgua;

		public function calculaPrecoDeVenda(){
			return $this->getPreco() + $this->getPreco() * 0.15;
		}
	}
?>