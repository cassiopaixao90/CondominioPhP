<?php
function cadastrarNoticia($conexao, $titulo, $noticia){ 
	$query = "insert into noticias (titulo, noticia, publicacao) values('{$titulo}', '{$noticia}' , 1)";
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

 function removeNoticia($conexao, $id){  
	$query = "delete from noticias where idnoticias = {$id}";
    return mysqli_query($conexao, $query);
}