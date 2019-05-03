<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$c_art= $_GET["c_art"];
	$secc= $_GET["secc"];
	$n_art= $_GET["n_art"];
	$pre= $_GET["pre"];
	$fec= $_GET["fec"];
	$imp= $_GET["imp"];
	$p_ori= $_GET["p_ori"];
	
	require("datos_conexionBBDD.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario, $db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();	
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
	
	$sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)"; // Se debe incluir ? para realizar la consulta preparada (paso 1)
	
	$resultado=mysqli_prepare($conexion,$sql); // se almacena el objeto mysqli_smtp, se preapara la consulta (paso 2)
	$ok= mysqli_stmt_bind_param($resultado, "sssssss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori); //se almacena true o false (paso 3)
	
	$ok=mysqli_stmt_execute($resultado);//Se ejecuta la consulta (paso 4)
	
	if($ok==false){
		echo "Error al ejecutar la consulta";	
	}
	else{
		/*$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);//asociar las variables como campos que devuelve la consulta	 (paso 5)
		
		echo "Articulos encontrados : <br><br> ";//leer valors y consulta
		
		while(mysqli_stmt_fetch($resultado)){
			echo $codigo . " " .$seccion.  " " . $precio . " "  . $pais . "<br>";	
		}//fin while*/
		
		echo "Se agrego el nuevo registro";
		mysqli_stmt_close($resultado);
		
		
	}



?>


</body>
</html>