<?php
	require_once('cabecalho.php');
	require_once('banco-categoria.php');
	require_once('logica-usuario.php');
	$categorias = listaCategorias($conexao);

	verificaUsuario();

	$produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");
	$usado = "";
?>
<h1>Formulario de Produto</h1>
<form action="adiciona-produto.php" method = "POST">
	<table class="table">
		<?php include('produto-formulario-base.php'); ?>
		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</table>
</form>
<?php include('rodape.php'); ?>