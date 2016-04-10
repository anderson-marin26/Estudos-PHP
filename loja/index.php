<?php include('cabecalho.php'); ?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true){ ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
	<p class="alert-danger">Usuario ou senha invalida!</p>
<?php }?>
			<h1>Bem-Vindo</h1>

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
<?php include('rodape.php'); ?>