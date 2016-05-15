<tr>
	<td>Nome:</td>
	<td><input class="form-control" type="text" name="nome" value = "<?=$produto['nome']?>" required></td>
</tr>
<tr>
	<td>Preço:</td>
	<td><input class="form-control" type="number" name="preco" value = "<?=$produto['preco']?>" required></td>
</tr>
<tr>
<td>Descrição:</td>
	<td><textarea class = "form-control" name="descricao" required><?=$produto['descricao']?></textarea></td>
</tr>
	<td></td>
	<td><input type = "checkbox" name = "usado" <?=$usado?> value = "true"> Usado</td>
</tr> 
<tr>
	<td>Categoria</td>
	<td>
		<select name = "categoria_id" class = "form-control">
			<?php foreach($categorias as $categoria): 
				$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
				$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
				<option value = "<?=$categoria['id'];?>" <?=$selecao;?>><?=$categoria['nome'];?></option>							
			<?php endforeach ?>
		</select>
	</td>
</tr>
<tr>
	<td>
		Tipo do Produto
	</td>
	<td>
		<select name="tipoProduto">
			<optgroup label="Livros">
				<option value="LivroFisico">Livro Fisico</option>
				<option value="Ebook">Ebook</option>
			</optgroup>
		</select>
	</td>
</tr>
<tr>
	<td>ISBN (caso seja um livro)</td>
	<td><input type="text" name="isbn" /></td>
</tr>