<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "usuario", "contraseña", "basedatos");

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];

        // Consultar el usuario por su ID
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>
            <h2>Editar Usuario</h2>
            <form action="actualizar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row["nombre"]; ?>" required><br><br>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row["correo"]; ?>" required><br><br>

                <input type="submit" value="Actualizar">
            </form>
    <?php
        } else {
            echo "Usuario no encontrado.";
        }
    }

    $conn->close();
    ?>
</body>
</html>