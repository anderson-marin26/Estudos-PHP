
<?php
	include('cabecalho.php');
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
?>

<p class="alert-success">Produto <?= $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!</p>
<?php include('rodape.php'); ?>