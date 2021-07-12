<?php


include("conexion_foro.php");

$sql_insti= "SELECT * FROM institutos";

$institutos= $conexion->query($sql_insti);

foreach ($institutos as $insti) {
	echo"<option value='".$insti["id_instituto"]."'>".$insti["nombre_instituto"]."</option>";
}

$conexion->close();

?>