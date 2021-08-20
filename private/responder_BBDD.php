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
$texto= 	$_POST["itexto"];
$id_comentario= $_POST["id_comentario"];
$fecha=		date("Y-m-d");

//Iniciamos sesion y recuperamos la id del usuario activo
session_start();
$id_autor= $_SESSION["id_usuario"];


/**
*Incluimos archivo de conexion
*@var $conexion
*@var $sql sentencia INSERT
*/
include("conexion_foro.php");

// $sql_id_usuario="";

$sql_comentarios="INSERT INTO respuestas(texto_respuesta, id_usuario, id_comentario, fecha_respuesta) 
						VALUES('$texto','$id_autor','$id_comentario','$fecha')";

// $conexion->query($sql_comentarios);


if($conexion->query($sql_comentarios)){
	echo "<script>
		alert('Respuesta guardada, gracias por participar');
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