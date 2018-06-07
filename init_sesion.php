<?php
	require 'connection.php';
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$mysql = new connection();
	$conexion = $mysql->get_connection();
	$response =$conexion->query("CALL LOGIN_USER('$email','$password')");
	if ($row = mysqli_fetch_array($response)) {
		if ($row['correo'] == $email && $row['pass'] == $password) {
			session_start();
			$_SESSION['emai'] = $email;			
			header("Location: clientes.php");
		}else{
			header("Location: clientes.php");
			exit();
		}
	}else{
		header("Location: index.php");
		exit();
	}
	
?>