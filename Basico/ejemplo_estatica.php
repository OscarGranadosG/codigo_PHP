<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php

	function incrementaVariable(){
		static $contador=0;
		$contador ++; // incrementa a 1 
		echo $contador . "<br>";
		
	}
	
	incrementaVariable();
	incrementaVariable();
	incrementaVariable();// Al poner static la variable incrementa
	//Si no es static solo imprime 1


?>

<body>
</body>
</html>