<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	
	try{
		
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", ""); // datos de conexion
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD=:password";
		
		$resultado=$base->prepare($sql);
		$login=htmlentities(addslashes($_POST["login"]));//convertir cualquier simbolo en HTML
		$password=htmlentities(addslashes($_POST["password"]));
		
		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);
		
		$resultado->execute();
		$numero_registro=$resultado->rowCount(); //devuelve 0 ó 1 si se encuentra en BBDD
		
		if($numero_registro!=0){
			
			session_start(); //crea session
			$_SESSION["usuario"]=$_POST["login"]; //almacena en $_SESSION[ el login del usuario
			header("location:usuarios_registrados1.php");
			
		}
		else{
			header("location:login.php");//Redirigir a la pagina de login
		}
		
	}//end try
	
	catch(Exception $e){
		die("Error: " .$e->getMessage());
	}


?>

</body>
</html>