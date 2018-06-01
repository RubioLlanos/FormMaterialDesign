<?php

	define('HOST','localhost');
	define('USER','root');
	define('PASWORD', '');
	define('DATABASE', 'db_clientes');

	function DB()
	{
		static $instance;
		if($instance === null){
			$opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
        );
			$dsn = 'mysql:host='.HOST.';dbname='.DATABASE;
			$instance = new PDO($dsn, USER,PASWORD, $opt);
		}
		return $instance;
	}

?>