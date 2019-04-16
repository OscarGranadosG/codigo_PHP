<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$nombre = "Oscar"; //String
	$nombre = "Granados"; //reasigno la variable $nombre
	
	$edad =25;
	
	print "El nombre del usuario es " . $nombre . " y la edad es " . $edad . "<br>" ;
	echo  "El nombre del usuario es $nombre y la edad que tienes es $edad<br>" ;
	
	//La diferencia de echo es la sgte:
	
	echo $nombre,$edad; // print $nombre,$edad;  ---> no lo permite hacer desde el print. 
	//Se recomienda usar echo


?>

</body>
</html>