<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

if(!$_COOKIE["idioma_seleccionado"]){
	header("Location:pag1.php");
}

else if($_COOKIE["idioma_seleccionado"]=="es"){
	header("Location:spanish.php");	
}

else if($_COOKIE["idioma_seleccionado"]=="in"){
	header("Location:english.php");	
}

?>

</body>
</html>