<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	.resaltar{
		color:#F00;
		font-weight:bold;
	}
	

</style>
</head>

<body>

<?php

	echo '<p class="resaltar"> Esto es un ejemplo de frese </p>';
	echo "<p class=\"resaltar\"> Esto es un ejemplo de frese </p>";
	
    $nombre="Juan";
	echo "hola $nombre<br>";
	
	/*strcmp = compara valores de tipo String(mayusculas mnusculas)
	  strcasecmp= compara valores de tipo String(ignora mayusculas       mnusculas)  -> Devuelve respuesta binaria*/
	  
	  $variable1="Casa";
	  $variable2="CASA";
	  
	  $resultado =strcmp($variable1,$variable2);//devuelve 1 si no son iguales y 0 si son iguales
	  echo "El resultado es $resultado; <br>";
	  
	  $resultado2=strcasecmp($variable1,$variable2);
	  echo "El resultado 2 es $resultado2 <br>";
	  
	  if($resultado2){
		  echo "No coinciden";
	  }else{
		  echo "Coinciden";
	  }
	  
	  
	  
	  




?>


</body>
</html>