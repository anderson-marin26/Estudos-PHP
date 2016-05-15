<?php
	// esta classe herda da classe produto seus atributos
	abstract class Livro extends Produto{
		public $isbn;

		public function calculaImposto(){
			return $this->getPreco() * 0.065;
		}
	}
?>