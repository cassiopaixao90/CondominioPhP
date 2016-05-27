<?php include("cabecalho.php"); ?>			
	  		<h1>Bem vindo!</h1>
			<form action="cadastrarnoticia.php" method="post">
				<table class="table">
					<tr>
						<td>Título:</td>
						<td> <input class="form-control" type="text" name="titulo" size="15"></td>
					</tr>
					<tr>
						<td>Notícia:</td>
						<td><textarea rows="10" cols="100" class="form-control" name="noticia" maxlength="300">
							

						</textarea> 
						</td>
					</tr>
					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Salvar</button>
							<a href="noticias-list.php" class="btn btn-primary">voltar</button>
						</td>
						<td>
							
						</td>
					</tr>
				</table>
			</form>		 
<?php include("rodape.php"); ?>	


