<?php
require_once ('class/Categoria.php');
require_once('class/Produto.php');
require_once('conecta.php'); 
function listaProdutos($conexao){
		$produtos = array();
		$resultado = mysqli_query($conexao, "SELECT p.*,c.nome as categoria_nome FROM produtos as p join categorias as c on c.id=p.categoria_id");
		while($produto_atual = mysqli_fetch_assoc($resultado)){
			$produto = new Produto;
			$categoria = new Categoria;
			$categoria->setNome($produto_atual['categoria_nome']);
			$produto->setId($produto_atual['id']);
			$produto->setNome($produto_atual['nome']);
			$produto->setPreco($produto_atual['preco']);
			$produto->setDescricao($produto_atual['descricao']);
			$produto->setCategoria($categoria);
			$produto->setUsado($produto_atual['usado']);

			array_push($produtos, $produto);
		}
		return $produtos;
	}	

	function insereProduto($conexao, Produto $produto){ // Aqui, ao inves de estar passando uma variavel para cada item do produto, to passando um objeto que tem q conter os valores da classe produto
		$query = "insert into produtos (nome,preco,descricao,categoria_id,usado) values('{$produto->getNome()}',{$produto->getPreco()},'{$produto->getDescricao()}',{$produto->getCategoria()->getId()},{$produto->getUsado()})";
		return mysqli_query($conexao,$query);
	}

	function alteraProduto($conexao, Produto $produto){
		$query = "update produtos set nome = '{$produto->nome}', preco = {$produto->getPreco()}, descricao = '{$produto->descricao}', categoria_id = {$produto->categoria_id}, usado = {$produto->usado} where id = '{$produto->id}'";
		return mysqli_query($conexao,$query);
	}

	function buscaProduto($conexao, $id){
		$query = "select * from produtos where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function removeProduto($conexao, $id){
		$query = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $query);
	}
?>