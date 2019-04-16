<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$busqueda=$_GET["buscar"];

	require("datos_conexionBBDD.php");
	
	//Conectar a BBDD por procedimiento
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra); //conexion con BBDD, se abre la conexion
	
	if(mysqli_connect_errno()){ //se ejecuta si se presenta fallo al conectar con la base de datos
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_set_charset($conexion, "utf8"); //Para aceptar e incluya caracteres 
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos"); // para especificar la base de datos que queremos conectar
	
	$consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'"; 
	
	$resultados=mysqli_query($conexion, $consulta); // para realizar la query y lo guarda en $resultados
	
	
	/*while($fila=mysqli_fetch_row($resultados)){ // Para ejecutar todos los registros // ARRAYS ASOCIATIVOS
	
		echo "<table><tr><td>";
		echo $fila[0]."</td><td> ";
		echo $fila[1]."</td><td> ";
		echo $fila[2]."</td><td> ";
		echo $fila[3]."</td><td> ";
		echo $fila[4]."</td><td> ";
		echo $fila[5]."</td><td> ";
		echo $fila[6]."</td><td></tr></table>";
		echo "<br>";
		echo "<br>";

	}*/
	
	while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){ // Para ejecutar todos los registros // ARRAYS ASOCIATIVOS
	
		echo "<table><tr><td>";
		echo $fila['CÓDIGOARTÍCULO']."</td><td> ";
		echo $fila['NOMBREARTÍCULO']."</td><td> ";
		echo $fila['SECCIÓN']."</td><td> ";
		echo $fila['IMPORTADO']."</td><td> ";
		echo $fila['PRECIO']."</td><td> ";
		echo $fila['PAÍSDEORIGEN']."</td><td></tr></table> ";
		echo "<br>";
		echo "<br>";
		
	}
	
	mysqli_close($conexion); // para cerrar la conexion con la BBDD
	

?>


</body>
</html>