<html>
<head>
	<title>Produto adicionado</title>
</head>
<body>

	<?php
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
	?>

	Produto <?= $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!
</body>
</html>