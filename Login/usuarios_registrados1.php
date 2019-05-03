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
	echo "Hola: " .$_SESSION["usuario"] . "<br>";

?>

<p><a href="cierre.php">Cierra sessión</a></p>

<p>Esto es informacion solo para usuarios registrados</p>
<table width="412" height="195" border="1">
  <tr>
    <td colspan="3" align="center">Zona de usuarios Registrados</td>
  </tr>
  <tr>
    <td><a href="usuarios_registrados2.php">Pagina 1</a></td>
    <td><a href="usuarios_registrados3.php">Pagina 2 </a></td>
    <td><a href="usuarios_registrados4.php">Pagina 3</a></td>
  </tr>
</table>


</body>
</html>