<?php include("cabecalhoMenu.php");
	  include("conecta.php");  
	  include("noticia.php");

  
$noticias = listaNoticia($conexao);

?> 
<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
	    <p class="alert-success">Notícia apagada com sucesso!</p>
 <?php } ?>

<table class="table table-striped table-bordered">
  <a href="adciona-formulario.php" class="col-sm-2 btn btn-primary" >Adicionar Notícia</a>   
</br>
</br> 

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Título</th>
        <th>Notícia</th>
        <th>Ações</th>
      </tr>
    </thead>
     <tbody>
<?php 
 foreach ($noticias as $noticia)  :
?>
	
    <tr> 
        <td class="col-md-4"><?= $noticia['titulo'] ?></td>
        <td class="col-md-8"><?= $noticia['noticia'] ?></td>
       	<td class="col-md-3">
       	   <a href="remove-noticias.php?id=<?=$noticia['idnoticias']?>" class="text-danger">remover</a>
       	</td>
       	<td class="col-md-3">
       		<a href="javascript:void(0)" class=<?= $noticia['publicacao'] ?> id="btnDelete" value="delete">delete</button>
       	</td>
       	 
    </tr>

<?php
endforeach
?>
</tbody>
<?php include("rodape.php"); ?>	


