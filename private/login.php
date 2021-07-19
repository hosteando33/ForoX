<?php


include("conexion_foro.php");

$email= 	$_POST["iemail"];
$clave =	$_POST["iclave"];



$comprobar_usuario = "SELECT * FROM usuarios WHERE email_usuario='$email' 
AND password_usuario='$clave'";

$tabla = $conexion->query($comprobar_usuario);


// print_r($registro);

if($registro= $tabla->fetch_array()){
	
	session_start();

	$_SESSION["id_usuario"]= 		$registro["id_usuario"];
	$_SESSION["nombre_usuario"]=	$registro["nombre_usuario"];

	// header("url: /private/zona_usuario.php");
	echo"
	<script>
		top.location.href='zona_usuario.php';
	</script>
	";

	echo"bieen";

}else{
	echo "no existes";
}



?>