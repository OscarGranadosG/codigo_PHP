<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php

	$busqueda_cart= $_POST["c_art"];


	try{ //Intenta
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); 
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//para informar el error
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO =:c_art ";
		
		$resultado=$base->prepare($sql);//PDO Statement
		
		$resultado->execute(array(":c_art"=>$busqueda_cart)); //array asociativo con el marcador
		
		
		echo "Registro eliminado OK";
		
		 $resultado->closeCursor(); //para evitar consumir recursos innecesarios
		
	}//TRY
	catch(Exception $e){ //para tomar/capturar el objeto del error
		die('Error: ' . $e->getMessage());
	}
	
	finally{ //eliminar y vaciar memoria
		$base=null;
	}


?>


</body>
</html>