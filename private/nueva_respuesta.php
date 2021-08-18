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

	include("conexion_foro.php");

	$sql = "SELECT * FROM comentarios ";

	$preguntas = $conexion->query($sql);

	?>

	<form method="POST" action="responder_BBDD.php">

		<div id= "texto_respuesta">
			<p>
				Pregunta:
			</p>

			<?php 
			
			foreach ($preguntas as $pregunta){
				if ($pregunta["id_comentario"] == $id_comentario) {
					echo $pregunta["texto_comentario"];
				}
			};
			
			echo $pregunta["texto_comentario"];

			?>

		</div>

		<textarea name="itexto" id="input_respuesta" required></textarea>

		<br>

		<input type="reset" value="Borrar">
		<input type="submit" value="Responder" id="preguntar">

	</form>

	<script>
		

		$("#input_respuesta").attr(
			"oninvalid",
			"this.setCustomValidity('Por favor, rellene este campo')"
		);

		$("#input_respuesta").attr("oninput", "this.setCustomValidity('')");
	</script>

</body>

</html>