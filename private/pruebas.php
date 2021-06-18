<?php

include("conexion_foro.php")


$input1= $_POST["nombre"];


$sql1= "SELECT * FROM usuarios";
$sql2= "INSERT INTO usuarios (nombre_usuario, email_usuario) 
						VALUES ('pedro','mimail@catmail.com')";


$conexion->query($sql2);

$filas= $conexion->query($sql1);

$conexion->close();






?>