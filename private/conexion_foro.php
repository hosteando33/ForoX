<?php


	$server_conexion=		"localhost";
	$user_conexion=			"forox";
	$password_conexion=		"1234";
	$basedatos_conexion=	"forox";

	#$link=mysqli_connect($s,$u,$p,$b) or die ("NO TE CONECTAS");

	//$acentos=$link->query("SET NAMES 'utf8'");


/**
*
*
*@autor: pedro
*/

	$conexion= new mysqli($server_conexion,
						$user_conexion,
						$password_conexion,
						$basedatos_conexion);

?>