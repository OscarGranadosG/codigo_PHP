|<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$nombre="Oscar";
	
	/*function dameNombre(){
		
		$nombre ="Maria";
	}
	
	dameNombre();*/
	echo $nombre . "<br>"; // imprime variable fuera de la function|
	
	include ("brindar_datos2.php");
	dameDatos();
	echo $nombre; //Sigue imprimiendo la variable fuera dela function 
	//como se declara global imprime lo de la function

?>


</body>
</html>