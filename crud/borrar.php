<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    // Conectar a la base de datos y borrar el usuario (código similar al de procesar_registro.php)
    // ...

    header("Location: index.php"); // Redirigir a la lista de usuarios después de borrar
}
?>
