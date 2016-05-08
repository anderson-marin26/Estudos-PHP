<?php
	class Produto {
		private $id;
		private $nome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;

		// Criando Metodo
		function valorComDesconto($valor = 0.5 /*aqui estou definindo um valor padrao, mas se a chamada passar um valor, ele sera usado*/){
			if($valor <= 0.5 && $valor < 1 && $valor > 0){
				$this->setPreco($this->preco -= $this->preco * $valor);
			}
			return $this->preco;
		}

		// Geters
		function getId(){
			return $this->id;
		}

		function getNome(){
			return $this->nome;
		}

		function getPreco(){
			return $this->preco;
		}

		function getDescricao(){
			return $this->descricao;
		}

		function getCategoria(){
			return $this->categoria;
		}

		function getUsado(){
			return $this->usado;
		}

		// Seters
		function setId($id){
			$this->id = $id;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

		function setPreco($preco){
			if($preco > 0){
				$this->preco = $preco;	
			}
		}

		function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		function setUsado($usado){
			$this->usado = $usado;
		}
	}
?>