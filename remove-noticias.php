<?php 
include("cabecalhoMenu.php");
include("conecta.php");
include("banco.php");
include("noticia.php");

$id = $_GET['id']; 
removeNoticia($conexao, $id);
header("Location: noticias-list.php?removido=true");
die();
?>



<?php
include("rodape.php");
?>