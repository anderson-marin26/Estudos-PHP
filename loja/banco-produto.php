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

				if($produto_atual['tipoProduto'] == "LivroFisico"){
					$produto = new $produto_atual['tipoProduto']($produto_atual['nome'], $produto_atual['preco'], $produto_atual['descricao'], $categoria, $produto_atual['usado']);
					$produto->isbn = $produto_atual['isbn'];
				}
				$produto->setId($produto_atual['id']);
				array_push($produtos, $produto);
			}
			return $produtos;
		}	

		function insereProduto(Produto $produto){ // Aqui, ao inves de estar passando uma variavel para cada item do produto, to passando um objeto que tem q conter os valores da classe produto
			$query = "insert into produtos (nome,preco,descricao,categoria_id,usado) values('{$produto->getNome()}',{$produto->getPreco()},'{$produto->getDescricao()}',{$produto->getCategoria()->getId()},{$produto->getUsado()})";
			return mysqli_query($this->conexao,$query);
		}

		function alteraProduto(Produto $produto){
			$query = "update produtos set nome = '{$produto->nome}', preco = {$produto->getPreco()}, descricao = '{$produto->descricao}', categoria_id = {$produto->categoria_id}, usado = {$produto->usado} where id = '{$produto->id}'";
			return mysqli_query($this->conexao,$query);
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