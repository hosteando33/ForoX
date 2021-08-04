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
$asignatura= $_POST["iasignatura"];
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

// $sql_id_usuario="";

$sql_comentarios="INSERT INTO comentarios(id_usuario, titulo_comentario, texto_comentario, fecha_comentario) 
						VALUES('$id_autor','$titulo','$texto','$fecha')";

$sql_id_comentario = $conexion->query("SELECT LAST_INSERT_ID()");

$sql_id_asignatura = $conexion->query("SELECT id_asignatura FROM asiganturas WHERE nombre_asignatura = '$asignatura'");

$result_id_asignatura = $sql_id_asignatura->fetch_array()[0];

$sql_comentarios_asignaturas="INSERT INTO comentarios_asignaturas(id_comentario, id_asinatura)
						VALUES('$sql_id_comentario', '$result_id_asignatura')";


/**
*Comprobamos que se realize el INSERT:
*/
if($conexion->query($sql_comentarios)&&$conexion->query($sql_comentarios_asignaturas)){
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