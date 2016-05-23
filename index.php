<?php include("cabecalho.php"); ?>			
	

			<h1>Bem vindo!</h1>
			<form action="login.php" method="post">
				<table class="table">
					<tr>
						<td>Email</td>
						<td> <input class="form-control" type="text" name="email" size="15"></td>
					</tr>
					<tr>
						<td>Preço</td>
						<td><input  class="form-control" type="password" name="senha"></td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Login</button>
						</td>
					</tr>
				</table>
			</form>		
<?php include("rodape.php"); ?>	


