<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Conectar a la base de datos y guardar el usuario (código similar al de procesar_registro.php)
    // ...

    header("Location: index.php"); // Redirigir a la lista de usuarios después de guardar
}
?>
