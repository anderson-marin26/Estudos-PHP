<?php include('cabecalho.php'); include('conecta.php'); include('banco-produto.php');?>

	
<table class = "table table-striped table-bordered">
	<?php $produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) :
	?>
		<tr>
			<td>
				<?=$produto['nome'];?> 
			</td>
			<td>
				<?=$produto['preco'];?>
			</td> 
			<td>
				<a href = "remove-produto.php?id=<?=$produto['id']?>" class = "text-danger">Remover</a>
			</td>
		</tr>
		<?php
	endforeach
?>
</table>


<?php include('rodape.php') ?>