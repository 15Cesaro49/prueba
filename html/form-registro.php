<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro e Inicio de Sesión</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo-form.css">
</head>
<body>

	<div class="form-container">
		<div class="form-toggle">
			<button id="register-toggle" class="active">Registro</button>
			<button id="login-toggle">Iniciar Sesión</button>
		</div>

		<form id="register-form" class="active" method="POST" action="../PHP/registro.php">
			<h2>Registro</h2>

			<label for="nombre">Nombre completo:</label>
			<input type="text" name="nombre" required>

			<label for="correo">Correo electrónico:</label>
			<input type="email" name="correo" required>

			<label for="password">Contraseña:</label>
			<input type="password" name="contra" required>

            <br><br>


			<input type="submit" value="Registrarse">
		</form>

		<form id="login-form" method="POST" action="../php/inicio.php">
			<h2>Iniciar Sesión</h2>

			<label for="correo">Correo electrónico:</label>
			<input type="email" name="correo" required>

			<label for="password">Contraseña:</label>
			<input type="password" name="contra" required>

			<input type="submit" value="Iniciar Sesión">
		</form>
	</div>

	<script src="../Script/script.js"></script>

</body>
</html>
