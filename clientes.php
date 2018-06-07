<!DOCTYPE html>
<html>
<head>
	<title>Form clientes</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background-image: url('images/transporte.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
	<div class="capa"></div>
	<div class="col lg12 center-align">
		<style type="text/css">
			.ussser{color: #fff; position: relative;}
		</style>
		<?Php 
		session_start();
		echo "<h1 class='ussser'>Bienvenido(a) ".$_SESSION['email'].'</h1>';
	?>
		
	</div>
	<div class="container-forms">
		<form method="post" action="http://localhost:8080/Forms/MaterialForms/logica.php">
			<div class="input-field">
				<input type="text" name="nombre">
				<label for="nombre">Nombre: </label>
			</div>
			<div class="input-field">
				<input type="text" name="apellido">
				<label for="apellido">Apellido: </label>
			</div>
			<div class="input-field">
				<input type="email" name="email">
				<label for="email">Email: </label>
			</div>
			<div class="input-field">
				<input type="password" name="pass">
				<label for="pass">Password: </label>
			</div>
			<div class="input-field">
				<input type="text" name="documento">
				<label for="documento">Documento: </label>
			</div>
			<div class="input-field">
				<input type="text" name="direccion">
				<label for="direccion">Dirección: </label>
			</div>
			<div class="input-field">
				<input type="text" name="telefono">
				<label for="telefono">Teléfono: </label>
			</div>
			<div class="input-field">
				<input type="text" name="ciudad">
				<label for="ciudad">Ciudad: </label>
			</div>
			<button class="btn">Enviar</button>
		</form>
	</div>
<footer>
	<script type="text/javascript" src="js/materialize.min.js"></script>	
	<!--<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/scripts.js"></script>	
</footer>
</body>
</html>