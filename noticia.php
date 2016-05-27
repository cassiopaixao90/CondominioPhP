<?php
function cadastrarNoticia($conexao, $titulo, $noticia){ 
	$query = "insert into noticias (titulo, noticia) values('{$titulo}', '{$noticia}')";
	if(mysqli_query($conexao, $query)){
		$return = 1;
	}else{
		$return = 0;
	}
}
 
 function listaNoticia($conexao){
	$noticias = array();
	$resultado = mysqli_query($conexao, "select * from noticias");
	while ($noticia = mysqli_fetch_assoc($resultado)) {
		array_push($noticias, $noticia);
	}
	return $noticias;
}