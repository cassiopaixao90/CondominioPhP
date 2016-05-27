<?php include("cabecalho.php"); ?>			
	<?php if(isset($_GET["login"]) && $_GET["login"] == true) {?>
		<p class="alert-success">Logado com Sucesso!</p>
	<?php }?>

	<?php if(isset($_GET["login"]) && $_GET["login"] == false) {?>
		<p class="alert-danger">Usuario ou senha inválida!</p>
	<?php }?> 
 			
	<?php if(isset($_COOKIE["usuario_logado"])) {?>
		<p class="text-success">Olá <?=$_COOKIE["usuario_logado"]?></p>
	<?php
		} else {
		?>

		
			<h1>Bem vindo!</h1>
			<form action="login.php" method="post">
				<table class="table">
					<tr>
						<td>Email</td>
						<td> <input class="form-control" type="text" name="email" size="15"></td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input  class="form-control" type="password" name="senha"></td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Login</button>
						</td>
					</tr>
				</table>
			</form>		
			<?php } ?>
<?php include("rodape.php"); ?>	


