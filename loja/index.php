<?php include('cabecalho.php'); include('logica-usuario.php'); ?>
<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){ ?>
	<p class="alert-success">Deslogado com sucesso!</p>
<?php }?>
<?php if(isset($_SESSION["logout"])){ ?>
	<p class="alert-success"><?=$_SESSION["logout"]?></p>
<?php } unset($_SESSION["logout"]);?>
<?php if(isset($_SESSION["success"])){ ?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php } unset($_SESSION["success"]);?>
<?php if(isset($_SESSION["danger"])){ ?>
	<p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php } unset($_SESSION["danger"]);?>
			<h1>Bem-Vindo</h1>
			<?php if(usuarioEstaLogado()) { ?>
				<span class="alert-success">Voce esta logado com o email <?=usuarioLogado()?> <a href="logout.php">Deslogar</a></span>
			<?php } else{ ?>
			<h2>Login</h2>
			<form action="login.php" method="POST">
				<table class="table">
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control"></td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input type="password" name="senha" class="form-control"></td>
					</tr>
					<tr>
						<td><button class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</form>
			<?php } ?>
<?php include('rodape.php'); ?>