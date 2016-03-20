<?php include('cabecalho.php'); include('conecta.php'); include('banco-produto.php');

	
	
	$produtos = listaProdutos($conexao);

	foreach ($produtos as $produto) {
		?>
		<tr>
			<td>
				echo $produto['nome']; 
			</td>
			<td>
				echo $produto['preco'];
			</td> 
		</tr>
		<?php
	}
?>


<?php include('rodape.php') ?>