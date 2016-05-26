<?php include("cabecalho.php"); ?>			
	  <?php if(isset($_COOKIE["usuario_logado"])) {?>
		<p class="text-success">Olá <?=$_COOKIE["usuario_logado"]?></p>
	<?php }?>
<?php include("rodape.php"); ?>	
