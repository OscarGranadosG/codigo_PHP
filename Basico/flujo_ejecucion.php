<!DOCTYPE html¡>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	echo "Este el primer mensaje <br>";
	
	function dameDatos(){
		
		echo "Mensaje del interior de a funcion generada dameDatos<br>";		
		
	}
	
	dameDatos(); // se llama a lafuncion dameDatos
	
	echo "Este el segundo mensaje <br>";
	
	dameDatos();
	
	include ("brindar_datos.php"); // Incluye un archivo externo 
	
	brindar_datos();
	
	//include = NO detiene el flujo de ejecucion si no esta el archivo
	//require = SI detiene el flujo de ejecucion si no esta el archivo
	
	


?>

</body>
</html>