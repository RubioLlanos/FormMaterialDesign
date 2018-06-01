<!DOCTYPE html>
<html>
<head>
	<title>Formulario con Materialize</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
<body>
	<div class="container container-forms">
		<h1 class="title_principal">Solicitud de Trámite(s) de Tránsito Virtual</h1>
		<div class="card">
			<div class="card-content">
				<div class="row">
					<div class="col s12">
						<a href="clientes.php" class="btn">Registrar Cliente</button>
						<h1 class="card-title">!Hola, ingresa tu e-mail</h1>
						<form action="#" id="login">
							<div class="input-field">
								<input type="Email" id="nombre">
								<label for="nombre">Email:</label>
							</div>							
							<div id="content-pass">
								<div class="input-field">
									<input type="password" name="password">
									<label for="pass">Contraseña:</label>
								</div>
								<a class="btn btn-large red" id="next1" href="">Ingresar</a>
							</div>
							<div class="center-align">
								<a href="">Crear cuenta</a>
							</div>
						</form>						
					</div>
					<section id="datos-pers">
						<div class="col s12">
							<h1 class="title_principal">Completa tus datos por favor!!!</h1>
						<form>
							<div class="col s6">
								<div class="input-field">
									<input type="text" name="nombre">
									<label for="nombre">Nombre:</label>
								</div>
								<div class="input-field">
									<input type="text" name="nombre">
									<label for="nombre">Apellido:</label>
								</div>
								<div class="input-field">
									<input type="text" name="nombre">
									<label for="nombre">Email:</label>
								</div>
								<div class="input-field">
									<input type="text" name="nombre">
									<label for="nombre">Contraseña:</label>
								</div>
							</div>
							<div class="col s6">
								<div class="input-field">
									<input type="number" name="nombre">
									<label for="nombre">Numero de documento:</label>
								</div>
								<div class="input-field">
									<input type="text" name="direccion">
									<label for="direccion">Dirección:</label>
								</div>
								<div class="input-field">
									<input type="text" name="nombre">
									<label for="nombre">Teléfono</label>
								</div>
								<div class="input-field">
									<input type="text" name="ciudad">
									<label for="ciudad">Ciudad</label>
								</div>								
							</div>
							<div class="col s12">
								<a class="btn btn-large red" href="">Continuar</a>
							</div>
						</form>						
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

<footer>
<script type="text/javascript" src="js/materialize.min.js"></script>	
	<!--<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/scripts.js"></script>	
</footer>
</body>
</html>