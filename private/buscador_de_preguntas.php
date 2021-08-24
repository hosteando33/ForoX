<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../maqueta/css/css_contenido.css">
</head>

<body>



	<?php
	//hacemos disponible la variable $conexion
	include("conexion_foro.php");

	$id_asignatura = $_GET['id_asignatura'];

	// $sql="SELECT * FROM  comentarios";
	$sql = "SELECT * FROM  comentarios INNER JOIN comentarios_asignaturas USING(id_comentario) INNER JOIN asignaturas USING(id_asignatura)";

	$filas = $conexion->query($sql);

	foreach ($filas as $fila) {
		if($id_asignatura == $fila['id_asignatura']){
		echo '
		<div class="comentario" id="comentario_' . $fila["id_comentario"] . '">
			<table>
				<tr class="tabla_encabezado">
					<td>' . $fila["titulo_comentario"] . '</td>
					<td>' .$fila["nombre_asignatura"] . '</td>
				</tr>
				<tr class="tabla_etiqueta">
					<td colspan="3">etiquetas</td>
				</tr>
				<tr class= "tabla_texto">
					<td colspan="3">' . $fila["texto_comentario"] . '</td>
				</tr>
				<tr class="tabla_pie">
					<td>likes</td>
					<td>fecha: ' . $fila["fecha_comentario"] . '</td>
				</tr>
				<tr class="tabla_respuesta">
					<td colspan="3">	

				  	<form action="nueva_respuesta.php" method="GET">
    					<input name="id_comentario" type="hidden" value="' . $fila["id_comentario"] . '">
    					<input type="submit" value="Responder">
					</form>
					</td>
				</tr>
			</table>
		</div>
		';
		}
	}
	?>