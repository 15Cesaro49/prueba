<!DOCTYPE html>
<html>
<head>
    <title>Crear Nuevo Usuario</title>
</head>
<body>
    <h2>Crear Nuevo Usuario</h2>
    <form action="guardar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>