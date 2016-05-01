
<?php require_once('class/Produto.php'); require_once('cabecalho.php');
	  require_once('banco-produto.php'); require_once('logica-usuario.php');
	  require_once('class/Categoria.php');?>
	<?php 
	verificaUsuario();

	$produto = new Produto; //criando objeto instanciado na classe produto
	$categoria = new Categoria;
	$categoria->id = $_POST['categoria_id'];
	$produto->nome = $_POST['nome'];
	$produto->preco = $_POST['preco'];
	$produto->descricao = $_POST['descricao'];
	$produto->categoria = $categoria;
	//verificando se o checkbox usado foi marcado ou nao
	if(array_key_exists('usado',$_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	$produto->usado = $usado;

	if(insereProduto($conexao, $produto)) { ?>
		<p class="text-success">Produto <?= $produto->nome ?>, de preço <?= $produto->preco ?> adicionado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $produto->nome ?>, não foi adicionado: <?= $msg?></p>
	<?php

	}
?>
<?php require_once("rodape.php"); ?>