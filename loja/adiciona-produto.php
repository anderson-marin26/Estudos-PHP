
<?php include("cabecalho.php"); include('conecta.php') ?>
	<?php 

	
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	//criando variavel com a conexao
	//$conexao = mysqli_connect('localhost','root','','loja');
	function insereProduto($conexao, $nome, $preco){
		$query = "insert into produtos (nome,preco) values('{$nome}',{$preco})";
		return mysqli_query($conexao,$query);
	}

	


	if(insereProduto($conexao, $nome, $preco)) { ?>
		<p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	<?php } else { $msg = mysqli_error($conexao); ?>
			<p class="text-danger">Produto <?= $nome ?>, não foi adicionado: <?= $msg?></p>
	<?php

	}
?>
<?php include("rodape.php"); ?>