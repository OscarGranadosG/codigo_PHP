<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php

	try{ //Intenta
		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //se instancia la clase PDO llamando al constructor //SE CREA CONEXION A BBDD
		echo "Conexion OK";
	}
	catch(Exception $e){ //para tomar/capturar el objeto del error
		die('Error: ' . $e->getMessage());
	}
	
	finally{ //eliminar y vaciar memoria
		$base=null;
	}
	
	

?>


</body>
</html>