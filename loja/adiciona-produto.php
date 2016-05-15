<?php 
	require_once('cabecalho.php');
	require_once('banco-produto.php');
	require_once('logica-usuario.php');

	verificaUsuario();
	$categoria = new Categoria;
	$categoria->setId($_POST['categoria_id']);

	//verificando se o checkbox usado foi marcado ou nao
	if(array_key_exists('usado',$_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	if($_POST['tipoProduto'] == "Livro"){
		$produto = new livro($_POST['nome'], $_POST['preco'], $_POST['descricao'], $categoria, $usado);
		$produto->isbn = $_POST['isbn'];	
	}else{
		$produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['descricao'], $categoria, $usado);
	}
	
	$produtoDao = new ProdutoDAO($conexao);
	if($produtoDao->insereProduto($produto)) { ?>
		<p class="text-success">Produto <?= $produto->getNome() ?>, de preço <?= $produto->getPreco() ?> adicionado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $produto->getNome() ?>, não foi adicionado: <?= $msg?></p>
	<?php

	}
?>
<?php require_once("rodape.php"); ?>