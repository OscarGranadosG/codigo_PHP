<?php	
    
    class Coche{
		
		//propiedades
		private $ruedas;  //encapsulacion -> private=, Solo puede ser accesible desde la propia clase, NO podra ser modificada fuera de la clase Coche
		var $color; //var por defecto es public
		protected  $motor; 
		
		//constructor =estado inicial con la que inicia el objeto
		function Coche(){
			$this->ruedas=4; // referencia una propiedad
			$this->color="";
			$this->motor=1600;
			
		}
		
		/*SETTER = Modificar-cambiar las propiedades de un objeto
		  GETTER = ver las propiedades de un objeto*/
		  
		function get_ruedas(){  //get = para ver la propiedad $ruedas fuera de la clase Coche
			return $this->ruedas;
		}
		
		function get_motor(){
			return $this->motor;
		}
		
		
		
		//metodos
		function arrancar(){
			echo "estoy arrancando<br>";
		}
		
		function girar(){
			echo "estoy girando<br>";
		}
		
		function frenar(){
			echo "estoy frenando<br>";
		}
		
		function set_color($color_coche, $nombre_coche){ //modifica el color del coche cob el Setter
			$this->color=$color_coche;
			echo "El color del " .$nombre_coche. " es: " .$this->color. "<br>";
		}
		
				
	}
	
	
	//Clase Camion
	
	class Camion extends Coche{ //extiende propiedaes y metodos de la clase Coche "hereda"
		
		
		//constructor =estado inicial con la que inicia el objeto
		function Camion(){
			$this->ruedas=8; // referencia una propiedad
			$this->color="gris";
			$this->motor=2600;
			
		}
		
		function establece_color($color_camion, $nombre_camion){ //sobreescritura de metodos del ya heredado
			$this->color=$color_camion;
			echo "El color del " .$nombre_camion. " es: " .$this->color. "<br>";
		}
		
		function arrancar(){
			parent::arrancar(); // "parent::" ejecuta el metodo heredado de la clase padre
			echo "Ya he arrancado"; // se añade esta nueva linea no heredada
		}
		
			
	}
	
?>