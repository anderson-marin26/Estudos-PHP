<?php
	class Categoria {
		private $id;
		private $nome;

		// geters
		function getId() {
			return $this->id;
		}

		function getNome() {
			return $this->nome;
		}

		// seters
		function setId($id) {
			$this->id = $id;
		}

		function setNome($nome) {
			$this->nome = $nome;
		}
	}
?>