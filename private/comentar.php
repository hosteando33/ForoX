<?php
/**
*PROYECTO FOROX
*
*@author Dalbizu y Pupsy
*@copyright  2021 D&P-HOMEWORK. ALL RIGHTS RESERVED, PRESENT AND FUTURES.
*@link http://localhost/FOROX/
*/

/**
*Se conecta a la base de datos para guardar el comentario
*y demas variables, recogidas por POST
*/
$autor= 	$_POST["iautor"];
$titulo= 	$_POST["ititulo"];
$etiquetas= $_POST["ietiqueta"];
$texto=		$_POST["itexto"];
$fecha=		date("Y-m-d");

//Trampeamos el id del autor.habria que buscar en la bd.
$id_autor= "1";



/**
*Incluimos archivo de conexion
*@var $conexion
*@var $sql sentencia INSERT
*/
include("conexion_foro.php");

$sql="INSERT INTO comentarios(id_usuario, titulo_comentario, texto_comentario, fecha_comentario) 
						VALUES('$id_autor','$titulo','$texto','$fecha')"; 

/**
*Comprobamos que se realize el INSERT:
*/
if($conexion->query($sql)){
	echo "<script>
		alert('Comentario guardado, gracias por participar');
		window.location.href='../maqueta/contenido0.html';
	</script>
	";

}else{
	echo "<script>
		alert('algo ha salido mal.');
		window.location.href='../maqueta/contenido1.html';
	</script>
	";
}
$conexion->close();

?>