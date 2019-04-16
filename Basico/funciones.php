<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

// FUNCIONES PREDEFINIDAS // 
	$palabra="Juan";
	
	echo (strtolower($palabra)."<br>"); //convierte a minusculas
	echo (strtoupper($palabra)."<br>"); //convierte a mayusculas
	
	function suma($num1,$num2){
		$resultado=$num1+$num2;
		return $resultado; //devulve lo almacenado en $resultado
	}
	
	echo(suma(5,7)."<br>"); //imprime valor de la function
	
	
// FUNCIONES PROPIAS // 

function frase_mayuscula($frase,$conversion=true){
	
	$frase=strtolower($frase);
	if($conversion==true){
		$resultado=ucwords($frase);
	}
	else{
		$resultado=strtoupper($frase);	
	}
	
	return $resultado;
	
}


echo (frase_mayuscula("esto es una prueba", false)."<br><br>");

//FUNCION PARAMETRO POR REFERENCIA//

function incrementa($valor1){
	$valor1++;
	return $valor1;
}

$numero=5;
echo incrementa($numero) ."<br>"; //la variable $numero es modificado por la funcion =6
echo $numero ."<br><br>"; //la variable $numero NO es modificado por la funcion =5


//Valor con referencia

function incrementa2(&$valor1){ //con el simbolo & se incrementa lo de adetro y fuera de  la funcion
	$valor1++;
	return $valor1;
}

$numero=5;
echo incrementa2($numero) ."<br>"; //imprime 6 por el valor de referencia &$valor1
echo $numero ."<br>"."<br>";//imprime 6 por el valor de referencia &$valor1
	
	

function cambia_mayus(&$param){
	$param=strtolower($param); //Mayusculas
	$param=ucwords($param); // primera letra en mayuscula
	return $param;
}

$cadena="holA mUndo";
echo cambia_mayus($cadena)."<br>";
echo$cadena;




?>


</body>
</html>