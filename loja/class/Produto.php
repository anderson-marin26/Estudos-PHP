<?php
	class Produto {
		private $id;
		private $nome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;

		// magic methods
		function __construct($nome = "Indefinido", $preco = 99999, $descricao = "Erro de gravação", Categoria $categoria, $usado = true){
			$this->setNome($nome);
			$this->setPreco($preco);
			$this->setDescricao($descricao);
			$this->setCategoria($categoria);
			$this->setUsado($usado);
		}

		function __toString(){
			return $this->nome." : ".$this->preco."  ".$this->descricao."  ".$this->categoria;
		}

		public function calculaImposto() {
				return $this->getPreco() * 0.195;	
		}

		// Criando Metodo
		function valorComDesconto($valor = 0.5 /*aqui estou definindo um valor padrao, mas se a chamada passar um valor, ele sera usado*/){
			if($valor <= 0.5 && $valor < 1 && $valor > 0){
				$this->setPreco($this->preco -= $this->preco * $valor);
			}
			return $this->preco;
		}

		public function temIsbn(){
			return $this instanceof Livro;
		}

		// Geters
		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function getUsado(){
			return $this->usado;
		}

		// Seters
		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setPreco($preco){
			if($preco > 0){
				$this->preco = $preco;	
			}
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		public function setUsado($usado){
			$this->usado = $usado;
		}
	}
?>