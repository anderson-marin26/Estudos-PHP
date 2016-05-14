<?php
	require_once('cabecalho.php');
	require_once('banco-produto.php');
?>

<table class = "table table-striped table-bordered">
	<?php 
		$produtoDao = new ProdutoDAO($conexao);
		$produtos = $produtoDao->listaProdutos();
		foreach ($produtos as $produto) :
	?>
		<tr>
			<td>
				<?=$produto->getNome();?> 
			</td>
			<td>
				<?=$produto->getPreco();?>
			</td>
			<td>
				<?=$produto->valorComDesconto(0.1) ?>
			<td>
				<?=substr($produto->getDescricao(),0,50);?>
			</td>
			<td>
				<?=$produto->getCategoria()->getNome();?>
			</td>
			<td>
				<a href = "produto-altera-formulario.php?id=<?=$produto->getId()?>" class = "btn btn-primary">Alterar</a>
			</td>
			<td>
				<form action = "remove-produto.php" method = "POST">
					<input type = "hidden" name = "id" value = "<?=$produto->getId();?>">
					<button class = "btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>
		<?php
	endforeach
?>
</table>

<?php include('rodape.php') ?>