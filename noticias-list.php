<?php include("cabecalhoMenu.php");
	  include("conecta.php");  
	  include("noticia.php");

  
$noticias = listaNoticia($conexao); 
?> 


<table class="table table-striped table-bordered">
  <a href="adciona-formulario.php" class="col-sm-2 btn btn-primary" >Adicionar Notícia</a>
</br>
</br> 
<?php 
 foreach ($noticias as $noticia)  :
?>

    <tr>
        <td><?= $noticia['titulo'] ?></td>
        <td><?= $noticia['noticia'] ?></td>
    </tr>

<?php
endforeach
?>
<?php include("rodape.php"); ?>	


