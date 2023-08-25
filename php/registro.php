<?php
include("conex.php");
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql= "INSERT INTO `registro`(`id`, `nombre`,  `correo`, `contrasena`) VALUES (NULL, '$nombre','$correo','$contrasena')";

$resultado = mysqli_query($conn,$sql);
mysqli_close($conn);
    echo'<script language="javascript">alert("Se ha resgistrado con exito!!!!");window.location.href="../html/form_registro.php"</script>'
?>
