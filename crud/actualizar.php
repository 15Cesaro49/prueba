<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Conectar a la base de datos y actualizar el usuario (código similar al de procesar_registro.php)
    // ...

    header("Location: index.php"); // Redirigir a la lista de usuarios después de actualizar
}
?>
