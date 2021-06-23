<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php


include("conexion_foro.php");

$sql="SELECT * FROM  comentarios";

$filas = $conexion->query($sql);

foreach($filas as $fila){

echo'
	<div>
		<table>
			<tr class="tabla_encabezado">
				<td>autor: </td>
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
	<hr>
	';
}




?>

<table>
	<tr>
		<td>autor</td>
		<td >titulo</td>
	</tr>
	<tr>
		<td >etiquetas</td>
	</tr>
	<tr>
		<td >texto<br>texto<br></td>
	</tr>
	<tr>
		<td>likesasdfasdfasdfadsf</td>
		<td>fecha:</td>
	</tr>
</table>

</body>
</html>
