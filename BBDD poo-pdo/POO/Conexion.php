<?php

	//Archivo conexion a BBDD

	require("config.php");
	
	
	/*---------------------------------------
	FORMA DE CONEXION CON LA LIBRERIA MYSQLI
	---------------------------------------*/
	
	/*class Conexion{
		protected $conexion_db;
		
		public function Conexion(){ //Constructor
				$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
				
				if($this->conexion_db->connect_errno){ // para mostrar error de conexion
					echo "Fallo al conectar Mysql: " .$this->conexion_db->connect_error;
					return;
				} //End IF
				
				$this->conexion_db->set_charset(DB_CHARSET);
			
		}//End constructor
		
	}*/
	
	
	/*---------------------------------------
	FORMA DE CONEXION CON LA LIBRERIA PDO
	---------------------------------------*/
	
	
	class Conexion{
		protected $conexion_db;
		
		public function Conexion(){ //Constructor
				
				try{
					$this->conexion_db=new PDO ('mysql:host=localhost; dbname=pruebas', 'root','');
					$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$this->conexion_db->exec("SET CHARACTER SET utf8");
					return $this->conexion_db;
					
				}catch(Exception $e){
					echo "La linea del error es " .$e->getLine();
				}
			
		}//End constructor
	}
	


?>