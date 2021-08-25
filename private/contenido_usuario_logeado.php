<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../maqueta/css/css_contenido.css">

	<script src="../maqueta/js/jquery-1.9.1.js"></script>

	<script>
		function ver_respuestas() {
			$("#respuestas").toggle();
		}
	</script>
</head>

<body>



	<?php
	//hacemos disponible la variable $conexion
	include("conexion_foro.php");

	// $sql="SELECT * FROM  comentarios";
	$sql = "SELECT * FROM  comentarios INNER JOIN usuarios USING(id_usuario) ORDER BY id_comentario DESC LIMIT 10";

	$filas = $conexion->query($sql);

	foreach ($filas as $fila) {
		echo '

		<script>
      		function ver_respuestas' . $fila["id_comentario"] . '() 
			{
        		$("#respuestas' . $fila["id_comentario"] . '").toggle();
      		}
    	</script>

		<div class="comentario" id="comentario_' . $fila["id_comentario"] . '">
			<table>
				<tr class="tabla_encabezado">
					<td>autor: ' . $fila["nombre_usuario"] . ' </td>
					<td colspan="2">' . $fila["titulo_comentario"] . '</td>
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
					<td>	
				  	<form action="nueva_respuesta.php" method="GET">
    					<input name="id_comentario" type="hidden" value="' . $fila["id_comentario"] . '">
    					<input type="submit" value="Responder">
					</form>
					</td>

					<td>

					<button id="ver_respuestas" onclick="ver_respuestas' . $fila["id_comentario"] . '();">Ver respuestas</button>

					</td>
				</tr>
				<tr id="respuestas' . $fila["id_comentario"] . '" style="display: none">
					<td colspan="3">
					<div id="">Respuesta</div>
					</td>
				</tr>
			</table>
		</div>
		';
	}
	?>