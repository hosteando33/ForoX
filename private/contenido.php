<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../maqueta/css/css_contenido.css">

	<script src="../maqueta/js/jquery-1.9.1.js"></script>

</head>
<body>

<?php
//hacemos disponible la variable $conexion
include("conexion_foro.php");

// $sql="SELECT * FROM  comentarios";
$sql= "SELECT * FROM  comentarios INNER JOIN usuarios USING(id_usuario) ORDER BY id_comentario DESC LIMIT 10";

$sql_respuestas = "SELECT * FROM respuestas INNER JOIN usuarios USING(id_usuario)";

$filas = $conexion->query($sql);

$respuestas = $conexion->query($sql_respuestas);

//			style="border:2px solid blue;
//					border-radius:10px 10px 10px 10px;
foreach($filas as $fila){
	echo'

		<script>
			function ver_respuestas' . $fila["id_comentario"] . '() 
  			{
	  			$("#respuestas' . $fila["id_comentario"] . '").toggle();
			}
		</script>

		<div class="comentario" id="comentario_'.$fila["id_comentario"].'">
			<table>
				<tr class="tabla_encabezado">
					<td>autor: '.$fila["nombre_usuario"].' </td>
					<td colspan="2">'.$fila["titulo_comentario"].'</td>
				</tr>
				<tr class="tabla_etiqueta">
					<td colspan="3">etiquetas</td>
				</tr>
				<tr class= "tabla_texto">
					<td colspan="3">'.$fila["texto_comentario"].'</td>
				</tr>
				<tr class="tabla_pie">
					<td>likes</td>
					<td>fecha: '.$fila["fecha_comentario"].'</td>

				</tr>

				<tr class="boton_ver_respuesta">
					<td colspan="3">

					<button id="ver_respuestas" onclick="ver_respuestas' . $fila["id_comentario"] . '();">Ver respuestas</button>

					</td>

				</tr>
			</table>
		</div>

		<div class="comentario" id="respuestas' . $fila["id_comentario"] . '" style="display: none">

			<table>
				<td colspan="3">
				<div id="">
	';

				foreach($respuestas as $respuesta){
					if($respuesta["id_comentario"] == $fila["id_comentario"]){
						echo ' <div> '. $respuesta["texto_respuesta"] .' </div>';
					}
				}
		echo'		
			</div>
			</td>
		</table>
			
	</div>

	';
}
?>