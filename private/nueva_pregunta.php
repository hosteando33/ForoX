<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../maqueta/css/css_contenido.css">
	<script src="../maqueta/js/jquery-1.9.1.js"></script>
</head>

<body>



	<form method="POST" action="comentar.php">
		<table>
			<tr class="tabla_encabezado">
				<td>
					autor:
					<input id="input_autor" type="text" name="iautor" value="pedroo">
				</td>
				<td colspan="2">
					titulo:
					<input id="input_titulo" type="text" name="ititulo">
				</td>
			</tr>
			<tr class="tabla_etiqueta">
				<td colspan="3">
					etiquetas
					<select id="input_etiqueta" name="ietiqueta">
						<option>Asignaturas</option>
					</select>

					<script type="text/javascript">
						$.post(
							"buscador_de_comentarios.php", {},
							function(retorno) {
								$("#input_etiqueta").append(retorno);
							}
						);
					</script>
					<!-- <input id="input_etiqueta" type="text" name="ietiqueta"> -->
				</td>
			</tr>
			<tr class="tabla_texto">
				<td colspan="3"><textarea name="itexto"></textarea></td>
			</tr>
			<tr class="tabla_pie">
				<td><input type="reset" value="borrar"> </td>
				<td><input type="submit" value="compartir"></td>
			</tr>
		</table>
	</form>

</body>

</html>