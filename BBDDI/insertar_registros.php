<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php


	
	require("datos_conexionBBDD.php");
	
	//Conectar a BBDD por procedimiento
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra); //conexion con BBDD, se abre la conexion
	
	if(mysqli_connect_errno()){ //se ejecuta si se presenta fallo al conectar con la base de datos
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos"); // para especificar la base de datos que queremos conectar
	
	mysqli_set_charset($conexion, "utf8"); //Para aceptar e incluya caracteres 
	
	$consulta="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44','DEPORTES','RAQUETA BADMINTON')"; 
	
	$resultados=mysqli_query($conexion, $consulta); // para realizar la query y lo guarda en $resultados
	
	mysqli_close($conexion); // para cerrar la conexion con la BBDD
	


?>
</body>
</html>