<?php
/**
*PROYECTO FOROX
*
*@author Dalbizu y Pupsy
*@copyright  2021 D&P-HOMEWORK. ALL RIGHTS RESERVED, PRESENT AND FUTURES.
*@link http://localhost/FOROX/
*/

/**
*Creacion de la variable de conexion
*@var $conexion
*/
$server_conexion=		"localhost";
$user_conexion=			"forox";
$password_conexion=		"1234";
$basedatos_conexion=	"forox";

//$link=mysqli_connect($s,$u,$p,$b) or die ("NO TE CONECTAS");
//$acentos=$link->query("SET NAMES 'utf8'");

$conexion= new mysqli($server_conexion,
					$user_conexion,
					$password_conexion,
					$basedatos_conexion);

?>