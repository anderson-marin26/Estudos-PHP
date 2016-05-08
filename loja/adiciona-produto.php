
<?php require_once('class/Produto.php'); require_once('cabecalho.php');
	  require_once('banco-produto.php'); require_once('logica-usuario.php');
	  require_once('class/Categoria.php');?>
	<?php 
	verificaUsuario();

	$produto = new Produto; //criando objeto instanciado na classe produto
	$categoria = new Categoria;
	$categoria->setId($_POST['categoria_id']);
	$produto->setNome($_POST['nome']);
	$produto->setPreco($_POST['preco']);
	$produto->setDescricao($_POST['descricao']);
	$produto->setCategoria($categoria);
	//verificando se o checkbox usado foi marcado ou nao
	if(array_key_exists('usado',$_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	$produto->setUsado($usado);

	if(insereProduto($conexao, $produto)) { ?>
		<p class="text-success">Produto <?= $produto->getNome() ?>, de preço <?= $produto->getPreco() ?> adicionado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $produto->getNome() ?>, não foi adicionado: <?= $msg?></p>
	<?php

	}
?>
<?php require_once("rodape.php"); ?>