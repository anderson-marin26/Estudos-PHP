<?php
	// esta classe herda da classe produto seus atributos
	class Livro extends Produto{
		public $isbn;

		function getIsbn() {
			return $this->isbn;
		}

		function setIsbn($isbn) {
			$this->isbn = $isbn;
		}
		public function calculaImposto(){
			return $this->getPreco() * 0.065;
		}
	}
?>