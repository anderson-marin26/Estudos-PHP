<?php
	require_once('conecta.php'); 
	// Criando DAO - Data Access Object
	class ProdutoDAO {

		private $conexao;
		function __construct($conexao) {
			$this->conexao = $conexao;
		}

		function listaProdutos(){
			$produtos = array();
			$resultado = mysqli_query($this->conexao, "SELECT p.*,c.nome as categoria_nome FROM produtos as p join categorias as c on c.id=p.categoria_id");
			while($produto_atual = mysqli_fetch_assoc($resultado)){
				$categoria = new Categoria;
				$categoria->setNome($produto_atual['categoria_nome']);
				$produto = new $produto_atual['tipoProduto']($produto_atual['nome'], $produto_atual['preco'], $produto_atual['descricao'], $categoria, $produto_atual['usado']);
				$produto->isbn = $produto_atual['isbn'];

				$produto->setId($produto_atual['id']);
				array_push($produtos, $produto);
			}
			return $produtos;
		}	

		function insereProduto(Produto $produto) {

		    if ($produto->temIsbn()) {
		        $isbn = $produto->isbn;
		    } else {
		        $isbn = "";
		    }

		    $tipoProduto = get_class($produto);

		    $query = "insert into produtos (nome, preco, descricao, categoria_id, 
		            usado, isbn, tipoProduto) values ('{$produto->getNome()}', 
		                {$produto->getPreco()}, '{$produto->getDescricao()}', 
		                    {$produto->getCategoria()->getId()}, {$produto->isUsado()}, 
		                        '{$isbn}', '{$tipoProduto}')";
		    return mysqli_query($this->conexao, $query);
		}

		function alteraProduto(Produto $produto){
		    if ($produto->temIsbn()) {
		        $isbn = $produto->getIsbn();
		    } else {
		        $isbn = "";
		    }

		    $tipoProduto = get_class($produto);

		    $query = "update produtos set nome = '{$produto->getNome()}', 
		        preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', 
		            categoria_id= {$produto->getCategoria()->getId()}, 
		                usado = {$produto->isUsado()}, isbn = '{$isbn}', 
		                    tipoProduto = '{$tipoProduto}' 
		                        where id = '{$produto->getId()}'";
		    return mysqli_query($this->conexao, $query);
		}

		function buscaProduto($id){
			$query = "select * from produtos where id = {$id}";
			$resultado = mysqli_query($this->conexao, $query);
			return mysqli_fetch_assoc($resultado);
		}

		function removeProduto($id){
			$query = "delete from produtos where id = {$id}";
			return mysqli_query($this->conexao, $query);
		}
	}
?>