<?php 
	require_once("cabecalho.php");
	require_once("conecta.php");

	$AlteraProduto = new Produto;
	$categoria = new Categoria;
	$categoria->setId($_POST['categoria_id']);

	$AlteraProduto->setId($_POST['id']);
	$AlteraProduto->setNome($_POST['nome']);
	$AlteraProduto->setPreco($_POST['preco']);
	$AlteraProduto->setDescricao($_POST['descricao']);
	$AlteraProduto->setCategoria($categoria);

	//verificando se o checkbox usado foi marcado ou nao
	if(array_key_exists('usado',$_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	$AlteraProduto->setUsado($usado);
	$produtoDao = new ProdutoDAO($conexao);
	if($produtoDao->alteraProduto($AlteraProduto)) { ?>
		<p class="text-success">Produto <?= $AlteraProduto->getNome() ?>, de preço <?= $AlteraProduto->getPreco() ?> alterado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $AlteraProduto->getNome() ?>, não foi alterado: <?= $msg?></p>
	<?php

	}	
?>
<?php include("rodape.php"); ?>