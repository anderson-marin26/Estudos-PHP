<?php include('cabecalho.php'); ?>
			<h1>Formulario de Produto</h1>
			<form action="adiciona-produto.php" method = "POST">
				<table class="table">
					<tr>
						<td>Nome:</td>
						<td><input class="form-control" type="text" name="nome" required></td>
					</tr>
					<tr>
						<td>Preço:</td>
						<td><input class="form-control" type="number" name="preco" required></td>
					</tr>
					<tr>
						<td>Descrição:</td>
						<td><textarea class = "form-control" name="descricao" required></textarea></td>
					</tr>
					<tr>
						<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
					</tr>
				</table>
			</form>
<?php include('rodape.php'); ?>