<?php
	require_once('cabecalho.php');
	require_once('banco-categoria.php');
	require_once('banco-produto.php');

	$id = $_GET['id'];
	$produtoDao = new ProdutoDAO($conexao);
	$produto = $produtoDao->buscaProduto($id);
	$categorias = listaCategorias($conexao);

	//fazendo um if com operador ternario
	$usado = $produto['usado'] ? "checked='checked'" : "";
?>
<h1>Alterando de Produto</h1>
<form action="altera-produto.php" method = "POST">
	<input type = "hidden" name = "id" value = "<?=$produto['id'];?>">
	<table class="table">
		<?php include('produto-formulario-base.php'); ?>
		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</tr>
	</table>
</form>
<?php include('rodape.php'); ?>