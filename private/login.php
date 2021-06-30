<?php


include("conexion_foro.php");

$email= $_POST["iemail"];
$clave =$_POST["iclave"];



$comprobar_usuario = "SELECT * FROM usuarios WHERE email_usuario='$email' 
AND password_usuario='$clave'";

$tabla = $conexion->query($comprobar_usuario);


// print_r($registro);

if($registro= $tabla->fetch_array()){
	
	// echo"<script>
	// 	alert('hola ".$registro["nombre_usuario"]."');
	// </script>";


	session_start();


	$_SESSION["id_usuario"]= $usuario["id_usuario"];
	header("location:mostrar.php");
}else{
	echo "no existes";
}









?>