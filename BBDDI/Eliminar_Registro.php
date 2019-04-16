<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php


	require("datos_conexionBBDD.php");
	
	$cod=$_GET["c_art"];  // valores que pasan del formulario
	$sec=$_GET["seccion"];
	$nom=$_GET["n_art"];
	$pre=$_GET["precio"];
	$fec=$_GET["fecha"];
	$imp=$_GET["importado"];
	$por=$_GET["p_orig"];
	
	//Conectar a BBDD por procedimiento
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra); //conexion con BBDD, se abre la conexion
	
	if(mysqli_connect_errno()){ //se ejecuta si se presenta fallo al conectar con la base de datos
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos"); // para especificar la base de datos que queremos conectar
	
	mysqli_set_charset($conexion, "utf8"); //Para aceptar e incluya caracteres 
	
	$consulta="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO ='$cod'"; 
	
	$resultados=mysqli_query($conexion, $consulta); // para realizar la query y lo guarda en $resultados
	
	if($resultados==false){
		echo "Error en la consulta";
	}
	else{
		/*echo "Registro eliminado <br>";
		echo mysqli_affected_rows($conexion);*/
		
		if(mysqli_affected_rows($conexion)==0){
			echo "No hay registros para eliminar";
		}
		else{
			echo "Se eliminaron " .mysqli_affected_rows($conexion). " registros";	
		}
	}
	
	
	mysqli_close($conexion); // para cerrar la conexion con la BBDD
	


?>



</body>
</html>