<?php

	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'clientes';
	$cn = mysqli_connect($server,$user,"",$database);

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$documento = $_POST['documento'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];

	echo $nombre;
	$rs = mysqli_query($cn,"CALL CREAR_CLIENTE('$nombre','$apellido','$email','$pass','$documento','$direccion','$telefono','$ciudad')");
?>