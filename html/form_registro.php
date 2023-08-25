<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro</title>
<link rel="stylesheet" href="../css/registro.css">
</head>
<body>
  <div class="container">
    <h1>Registro</h1>
    <form action="../php/registro.php" method="post">
      <label for="username">Nombre de usuario:</label>
      <input type="text" id="username" name="nombre" required>
      
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="correo" required>
      
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="contrasena" required>
      
      <button type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>
