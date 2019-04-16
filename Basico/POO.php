<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	include ("POO_clases.php"); //Utilia el codigo del archivo POO_clases-php
	
	//se instancia un objeto de la clase Coche
	$renault=new Coche(); 
	$mazda=new Coche();
	$seat=new Coche();
	$pegaso=new Camion();
	
	$mazda->girar();
	echo "El mazda tiene " .$mazda->get_ruedas() ." ruedas<br>"; //get=para ver la propiedad de la clase encapsulada
	
	//echo "el pegaso tiene " .$pegaso->get_ruedas. " ruedas<br>"; /*No se puede mostrar ya que la variable $ruedas es private, para que pueda ser mostrada en pantalla debe ser PROTECTED y no PRIVATE
	
	$renault->set_color("Rojo", "Renault");
	$seat->set_color("Azul","seat");
	
	
	
	echo $pegaso->color. "<br>";
	echo  $pegaso->frenar(). "<br>";
	echo $pegaso->arrancar(). "<br>";
	
	echo "El mazda tiene " .$mazda->get_motor(). " motor cc<br>";
	
	
	
	
	




?>
</body>
</html>