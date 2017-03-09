<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>POO - Clases</title>
	</head>

	<body>
		<?php 
			include_once("vehiculos.php");
			
			$mazda = new Coche();
			$pegaso = new Camion();
			
			echo "El mazda tiene ".$mazda->ruedas." ruedas<br>";
			echo "El pegaso tiene ".$pegaso->ruedas." ruedas<br>";
		
		?>
	</body>
</html>