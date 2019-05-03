<?php

//Nos conectamos a BBDD y se realiza la consulta
	require("Conexion.php");
	
	class devuelveProductos extends Conexion{
		
		
		public function devuelveProductos(){
			
			parent::__construct(); //llama al construcotr de la clase padre, clase Conexion
			
		}//End Constructor
		
		public function get_productos($dato){ //Metodo para consulta SQL	
		
			/*-------------------------
			--FORMA LIBRERIA MYSQLI---
			------------------------*/
			
			/*$resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN="' .$dato. '"');
			$productos=$resultado->fetch_all(MYSQLI_ASSOC);
			return $productos; //devuelve el array*/
			
			/*-------------------------
			--FORMA LIBRERIA MYSQLI---
			------------------------*/
			$sql="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN='" .$dato. "'"; //Contiene la sentencia SQL
			$sentencia=$this->conexion_db->prepare($sql); //consulta preparada
			$sentencia->execute(array());
			$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
			$sentencia->closeCursor(); //cerrar la conexion
			return $resultado;
			$this->conexion_db=null; //limpiar memoria
				
		}
	}


?>