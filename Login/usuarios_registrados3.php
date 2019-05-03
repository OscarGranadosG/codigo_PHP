<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
	session_start();//para reanudar la session
	
	if(!isset($_SESSION["usuario"])){
		header ("Location:login.php");	
	}
?>

<h1>Bienvenidos Usuarios</h1>
<?php
	echo "Usuario: " .$_SESSION["usuario"] . "<br>";

?>

<p><a href="cierre.php">Cierra sessión</a></p>
<p>Esto es informacion solo para usuarios registrados</p>

<p><a href="usuarios_registrados1.php">Volver</a></p>

</body>
</html>