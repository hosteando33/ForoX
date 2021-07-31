<?php


include("conexion_foro.php");

$sql_asignaturas= "SELECT * FROM asignaturas";

$asignaturas= $conexion->query($sql_asignaturas);

foreach ($asignaturas as $asignatura) {
	echo"<option value='".$asignatura["id_asignatura"]."'>".$asignatura["nombre_asignatura"]."</option>";
};

// echo "<option>yeah</option>";

$conexion->close();



?>