<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>POO - Clases</title>
	</head>

	<body>
		<?php 
			//session_start();
			//$_SESSION["zeneque"] = "mizeneque";
			include_once("concesionario.php");
			
			//Desde fuera de la clase para acceder a elementos estaticos usamos [nombreClase]::
			CompraVehiculo::$ayuda = 10000;
			
			
			$compraAntonio = new CompraVehiculo("compacto");
			
			$compraAntonio->climatizador(); //incrementa el precio en 2000
			$compraAntonio->tapiceriaCuero("blanco"); //incrementa en 3000

			
			echo "Antonio el putas se ha gastado en un coche km 0 (con 3 años, recien pintado): ".$compraAntonio->precioFinal()."€<br>";
			
			
			$compraAnal = new CompraVehiculo("compacto");
			
			$compraAnal->climatizador();
			$compraAnal->tapiceriaCuero("rojo");
			
			echo "Ana1 (que no Anal) se ha gastado en un coche: ".$compraAnal->precioFinal()."€<br>";
		?>
	</body>
</html>