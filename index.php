<!DOCTYPE html>
<html>
<head>
	<title>Formulario con Materialize</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>
	<div class="container container-forms">
		<h3>Index de la página</h3>
		<form method="post" action="">
			<div class="input-field">
				<input type="email" name="email" required>
				<label for="email">Email:</label>
			</div>
			<div class="input-field">
				<input type="password" name="pass">
				<label for="pass">Contraseña:</label>
			</div>
			<a href="clientes.php" class="btn">Ingresar</a>
		</form>
		<p>¿No tienes una cuenta?<a href="clientes.php" class="">Crear cuenta</a></p>
		
		
	</div>

<footer>
<script type="text/javascript" src="js/materialize.min.js"></script>	
	<!--<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/scripts.js"></script>	
</footer>
</body>
</html>