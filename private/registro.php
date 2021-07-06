<?php

$id_usuario= $_POST["id_usuario_nuevo"];
$apellido= $_POST["apellido_usuario"];
$instituto= $_POST["id_instituto"];
$email= $_POST["iemail"];
$clave= $_POST["iclave"];

include("conexion_foro.php");

$sql="INSERT INTO usuarios(nombre_usuario, apellido_usuario, id_instituto, email_usuario, password_usuario)
                    VALUES('$id_usuario', '$apellido', '$instituto', '$email', '$clave')";

if($conexion->query($sql)){
echo "<script>
    alert('Usuario registrado, gracias por participar');
    window.location.href = '../maqueta/contenido0.html';
</script>
";

}else{
echo "<script>
    alert('algo ha salido mal.');
    window.location.href = '../maqueta/contenido1.html';
    </script>
";
}
$conexion->close();

?>