
<?php include("cabecalho.php"); ?>
	<?php 
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	//criando variavel com a conexao
	$conexao = mysqli_connect('localhost','root','','loja');
	//criando a query para inserir no bd
	$query = "insert into produtos (nome,preco) values('{$nome}',{$preco})";

	//executando a query
	if(mysqli_query($conexao,$query)) { ?>
		<p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	<?php } else { ?>
			<p class="alert-danger">Produto <?= $nome ?>, não foi adicionado.</p>
	<?php
	}
?>
<?php include("rodape.php"); ?>