<?php include("cabecalho.php"); include('conecta.php'); include('banco-produto.php');


$id = $_GET['id'];
removeProduto($conexao, $id);
?>
<p class = "text-success">O produto <?= $id?> foi removido com sucesso</p>