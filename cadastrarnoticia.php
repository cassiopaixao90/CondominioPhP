
<?php
include("cabecalho.php");
include("conecta.php");
include("noticia.php");

$titulo = $_POST["titulo"];
$noticia = $_POST["noticia"];

$result = cadastrarNoticia($conexao, $titulo, $noticia);
if($result== 0) {
    
     header("Location: noticias-list.php");
} else {
     header("Location: adciona-formulario.php");
}

?>



