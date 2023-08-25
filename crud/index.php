<!DOCTYPE html>
<html>
<head>
    <title>CRUD Básico</title>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <a href="crear.php">Crear Nuevo Usuario</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
        </tr>
        <?php
        $conn = new mysqli("localhost", "usuario", "contraseña", "basedatos");

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }


        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "<td>
                        <a href='editar.php?id=" . $row["id"] . "'>Editar</a>
                        <a href='borrar.php?id=" . $row["id"] . "'>Borrar</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
