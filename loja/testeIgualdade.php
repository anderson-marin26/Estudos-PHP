<?php
	require_once "class/Produto.php";

	$livro1 = new Produto;
	$livro1->setNome("Livro da casa do codigo");
	$livro1->setPreco(10);

	$livro2 = new Produto;
	$livro2->setNome("Livro de culinaria");
	$livro2->setPreco(10);

	if($livro1 === $livro2){
		echo "Livros iguais";
	}
	else{
		echo "Livros diferentes";
	}
?>