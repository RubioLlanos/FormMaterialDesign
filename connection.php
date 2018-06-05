<?php
	
	/**
	 * 
	 */
	class Connection	
	{
		private $conn;
		public function __construct()
		{
			$this->conn = new mysqli("localhost","root","","clientes");
		}
		public function get_connection(){
			return $this->conn;
		}
	}
?>