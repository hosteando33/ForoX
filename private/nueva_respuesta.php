<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../maqueta/css/css_contenido.css">
	<script src="../maqueta/js/jquery-1.9.1.js"></script>
</head>

<body>

	<?php session_start(); 
	$id_comentario = $_GET['id_comentario'];
	?>

	<form method="POST" action="preguntar_BBDD.php">
		<table>
			<tr class="tabla_encabezado">
				<td>
					Autor:
					<input id="input_autor" type="text" name="iautor" value=" <?php echo $_SESSION["nombre_usuario"]; ?>" disabled>
					Id:
					<p>
						<?php
						echo $id_comentario;
						?>
					</p>
				</td>
				<td colspan="2">
					Titulo:
					<input id="input_titulo" type="text" name="ititulo" required>
				</td>
			</tr>
			<tr class="tabla_etiqueta">
				<td colspan="3">
					Etiquetas
					<select id="input_etiqueta" name="iasignatura" required>
						<option>Asignaturas</option>
						<script type="text/javascript">
							$.post(
								"buscador_de_comentarios.php", {},
								function(retorno) {
									$("#input_etiqueta").append(retorno);
								}
							);
						</script>
					</select>
					<!-- <input id="input_etiqueta" type="text" name="ietiqueta"> -->
				</td>
			</tr>
			<tr class="tabla_texto">
				<td colspan="3"><textarea name="itexto" id="input_pregunta" required></textarea></td>
			</tr>
			<tr class="tabla_pie">
				<td><input type="reset" value="Borrar"> </td>
				<td><input type="submit" value="Preguntar" id="preguntar"></td>
			</tr>
		</table>
	</form>

	<script>
		$("#preguntar").click(function() {
			let campo_asignatura = $("#input_etiqueta")[0];
			if ($("#input_etiqueta").val() !== "Asignaturas") {
				campo_asignatura.setCustomValidity("");
			} else {
				campo_asignatura.setCustomValidity("Inserte una asignatura");
			}
		});

		$("#input_pregunta", "#input_titulo").attr(
          "oninvalid",
          "this.setCustomValidity('Por favor, rellene este campo')"
        );

        $("#input_pregunta", "#input_titulo").attr("oninput", "this.setCustomValidity('')");

	</script>

</body>

</html>