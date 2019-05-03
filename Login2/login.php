<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>
	h1, h2{
		text-align:center;
	}
	
	table{
		width:25%;
		background-color:#FFC;
		border:2px dotted #F00;
		margin:auto;
	}
	
	.izq{
		text-align:right;
	}
	
	.der{
		text-align:left;
	}
	
	td{
		text-align:center;
		padding:10px;
	}


</style>

</head>

<body>

<?php

if(isset($_POST["enviar"])){ // si hemos pulsado el boton de enviar realzia la coneion con BBDD
	
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
			//header("location:usuarios_registrados1.php");
			
		}
		else{
			//header("location:login.php");//Redirigir a la pagina de login
			echo "Error. Usuario o contraseña incorrecto";
		}
		
	}//end try
	
	catch(Exception $e){
		die("Error: " .$e->getMessage());
	}

}
?>

<?php  //muestra el formulario siempre y cuando se inicie sesion

if(!isset($_SESSION["usuario"])){
	include ("formulario.html");
}
else{
	echo "Usuario: " . $_SESSION["usuario"];	
}

?>



<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
	<tr>
    	<td><img src="" width="300" height="166"></td>
        <td><img src="" width="300" height="171"></td>
    </tr>
    <tr>
    	<td><img src="" width="300" height="166"></td>
        <td><img src="" width="300" height="197"></td>
    </tr>
</table>



</body>
</html>