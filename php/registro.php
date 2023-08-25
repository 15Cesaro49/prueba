<?php
    include("db.php");
    $nombre= $_POST ['nombre'];
    $correo= $_POST ['correo'];
    $contra=$_POST ['contra'];
    
    
    $sql= "INSERT INTO `registro`(`id`, `nombre`, `correo`, `contra`) VALUES (NULL,'$nombre','$correo','$contra')";

    
    $resultado = mysqli_query($conex,$sql);
    mysqli_close($conex);

    echo'<script language="javascript">alert("Se ha resgistrado con exito!!!!");window.location.href="../HTML/form-registro.php"</script>'
 
 ?>