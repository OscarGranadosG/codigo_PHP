<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	//ARRAY MULTIDIMENSION ASOCIATIVO

	$alimentos=array("fruta"=>array("tropical"=>"Kiwi",
									"citrico"=>"mandarina",
									"otros"=>"manzana"),
					 "leche"=>array("animal"=>"vaca",
					 				"vegetal"=>"coco"),
					 "carne"=>array("vacuno"=>"lomo",
					 				"porcino"=>"pata"));
									
	echo $alimentos["carne"]["vacuno"] ."<br>";
	
	
	//Para recorrer un array multimension
	
	/*foreach($alimentos as $clave_ali=>$alim){
		
		echo "$clave_ali:<br>";

		while(list($clave,$valor)=each($alim)){
			echo "$clave=$valor<br>";
		}
		
		echo "<br>";
	}*/
	
	echo var_dump($alimentos); // tambien para imprimir el array


?>

</body>
</html>