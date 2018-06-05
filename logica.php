<?php	
	require 'connection.php';

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$documento = $_POST['documento'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];

	$mysql = new connection();
	$conexion = $mysql->get_connection();
	echo "Bienvenido (a)".$nombre;
	$rs = mysqli_query($conexion,"CALL CREAR_CLIENTE('$nombre','$apellido','$email','$pass','$documento','$direccion','$telefono','$ciudad')");
?>