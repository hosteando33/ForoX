<?php

session_start();

$adios = $_SESSION["nombre_usuario"];

session_destroy();

echo"

<script>
	alert('Que tengas muy buen dia $adios');
	window.location.href='../';
</script>

";



?>