<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$conexion=new mysqli("localhost", "root", "", "pruebas"); //se determina la conexion a BBDD
	
	if($conexion->connect_errno){
		echo "fallo en la conexion" .$conexion->connect_errno; //para mostrar error de conexion
	}
	
	//mysqli_set_charset($conexion, "utf8");  Forma procedimental
	$conexion->set_charset("utf8");  //forma POO
	
	$sql="SELECT * FROM PRODUCTOS";
	
	// $resultado=mysqli_query($conexion, $sql); Forma procedimental 
	$resultado=$conexion->query($sql); //forma POO
	
	if($conexion->errno){ // por si la consulta es erronea
		
		die($conexion->error);
	}
	
	
	//while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)   Forma procedimental
	while ($fila=$resultado->fetch_array()){//forma POO recorre los resultados obtenidos
		
		echo "<table><tr><td>";
		echo $fila[0]."</td><td> ";
		echo $fila[1]."</td><td> ";
		echo $fila[2]."</td><td> ";
		echo $fila[3]."</td><td> ";
		echo $fila[4]."</td><td> ";
		echo $fila[5]."</td><td></tr></table> ";
		echo "<br>";
		echo "<br>";
	
	}
	
	// mysqli_close($conexion); Forma procedimental
	$conexion->close(); //forma POO
	


?>

</body>
</html>