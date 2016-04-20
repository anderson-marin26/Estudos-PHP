<?php 
include('conecta.php'); 
	function listaCategorias($conexao){
		$categorias = array();
		$resultado = mysqli_query($conexao, "SELECT * FROM categorias");
		while($categoria = mysqli_fetch_assoc($resultado)){
			array_push($categorias, $categoria);
		}
		return $categorias;
	}

?>