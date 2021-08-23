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

// $sql="SELECT * FROM  comentarios";
$sql= "SELECT * FROM  comentarios INNER JOIN usuarios USING(id_usuario) ORDER BY id_comentario DESC LIMIT 10";

$filas = $conexion->query($sql);

//			style="border:2px solid blue;
//					border-radius:10px 10px 10px 10px;
foreach($filas as $fila){
	echo'
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
			</table>
		</div>
		';
	}
?>


<!-- <form method="POST" action="comentar.php">
	<table>
		<tr class="tabla_encabezado">
			<td>
				autor:
				<input id="input_autor" type="text" name="iautor" value="pedro">
			</td>
			<td colspan="2">
				titulo:
				<input id="input_titulo" type="text" name="ititulo">
			</td>
		</tr>
		<tr class="tabla_etiqueta">
			<td colspan="3">
				etiquetas
				<input id="input_etiqueta" type="text" name="ietiqueta">
			</td>
		</tr>
		<tr class= "tabla_texto">
			<td colspan="3"><textarea name="itexto"></textarea></td>
		</tr>
		<tr class="tabla_pie">
			<td><input type="reset" value="borrar">	</td>
			<td><input type="submit" value="compartir"></td>
		</tr>
	</table>
</form>

</body>
</html> -->
