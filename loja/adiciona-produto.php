
<?php include("cabecalho.php"); include('conecta.php'); include('banco-produto.php') ?>
	<?php 

	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];

	if(insereProduto($conexao, $nome, $preco, $descricao)) { ?>
		<p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $nome ?>, não foi adicionado: <?= $msg?></p>
	<?php

	}
?>
<?php include("rodape.php"); ?>