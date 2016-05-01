<?php
	require "class/Produto.php";

	$livro = new Produto;		// Usando a classe na variavel livro, ou seja, instanciando a variavel na classe Produto.

	$livro->nome = "Livro de php";

	echo "<pre>";
	var_dump($livro);
	echo "</pre>";

?>