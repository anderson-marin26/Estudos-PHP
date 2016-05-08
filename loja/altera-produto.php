
<?php require_once("class/Produto.php"); require_once("cabecalho.php"); require_once('banco-produto.php') ?>
	<?php 

	$AlteraProduto = new Produto;

	$AlteraProduto->id = $_POST['id'];
	$AlteraProduto->nome = $_POST['nome'];
	$AlteraProduto->setPreco($_POST['preco']);
	$AlteraProduto->descricao = $_POST['descricao'];
	$AlteraProduto->categoria_id = $_POST['categoria_id'];
	//verificando se o checkbox usado foi marcado ou nao
	if(array_key_exists('usado',$_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	$AlteraProduto->usado = $usado;

	if(alteraProduto($conexao, $AlteraProduto)) { ?>
		<p class="text-success">Produto <?= $AlteraProduto->nome ?>, de preço <?= $AlteraProduto->getPreco() ?> alterado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $AlteraProduto->nome ?>, não foi alterado: <?= $msg?></p>
	<?php

	}
?>
<?php include("rodape.php"); ?>