<?php
	class Produto {
		public $id;
		public $nome;
		public $preco;
		public $descricao;
		public $categoria;
		public $usado;

		// Criando Metodo
		function valorComDesconto($valor = 0.5 /*aqui estou definindo um valor padrao, mas se a chamada passar um valor, ele sera usado*/){
			if($valor > 0 && $valor < 1){
				$this->preco -= $this->preco * $valor;
				return $this->preco;
			}
		}
	}
?>