<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	//ARRAY INDEXADO//
	
	/*$semana[0]="Lunes";
	$semana[1]="Martes";
	$semana[2]="Miercoles";*/
	
	$semana=array("Lunes","martes","miercoles","jueves"); //Definicion de array
	echo $semana[3]."<br>";
	
	
	
	//ARRAY ASOCIATIVO//
	
	$datos=array("Nombre"=>"Juan", "Apellido"=>"Gomez", "edad"=>21);
	
	if(is_array($datos)){  //devuelve un boolean si es array
		echo "Es un array <br>";
	}else{
		echo "No es un array <br>";	
	}
	
	//Para recorrer un array asociativo//
	
	foreach($datos as $clave=>$valor){
		echo "A $clave le corresponde $valor <br>";
	}
	
	
	//Para recorrer un array indexado//
	
	for ($i=0; $i<count($semana); $i++){
		echo $semana[$i] ."<br>";		
	}
	
	//Para agregar elementos en el array indexado
	$semana[]="viernes";
	
	for ($i=0; $i<count($semana); $i++){
		echo $semana[$i] ."<br>";		
	}
	
	//Para agregar elementos en el array asociativo
	
	$datos["Pais"]="Colombia";
	
	
	//Para ordenar  los elementos del array
	
	sort ($semana);
	
	
	


?>


</body>
</html>