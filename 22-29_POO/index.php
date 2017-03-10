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
			
			//$mazda->ruedas = 7;
			
			echo "El mazda tiene ".$mazda->getRuedas()." ruedas<br>";
			echo "El pegaso tiene ".$pegaso->getRuedas()." ruedas<br>";
			echo "El mazda tiene un motor de ".$mazda->getMotor()." cilindros<br>";
			
			$pegaso->frenar();
			
			$pegaso->setColor("amarillo","Pegaso");
			
			$pegaso->arrancar();
		
		?>
	</body>
</html>