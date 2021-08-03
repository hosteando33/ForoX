<?php

$autor= 	$_POST["iautor"];
$titulo= 	$_POST["ititulo"];
$etiquetas= $_POST["ietiqueta"];
$texto=		$_POST["itexto"];
$fecha=		date("Y-m-d");


$id_autor= "1";


include("conexion_foro.php");

$sql="INSERT INTO comentarios(id_usuario, titulo_comentario, texto_comentario, fecha_comentario) 
						VALUES('$id_autor','$titulo','$texto','$fecha')"; 



if($conexion->query($sql)){
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