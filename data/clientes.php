<?php
	
	require __DIR__ . '/db_conection.php';
	class Clientes{
		protected $db;

		public function __construct(){
			$this->db = DB();
		}

		public function CreateCliente($nombre,$apellido,$email,$direccion){
			
		}
	}
?>