<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
	</head>
	
	<body>
		<?php 
			//se puede poner los índices o no, si no los marcamos los pone automáticamente PHP, así de majo es...
			//$semana[0] = "Lunes";
			//$semana[1] = "Martes";
			//$semana[2] = "Miércoles";
			
			$semana = array("Lunes", "Martes", "Miércoles", "Jueves");
			
			echo $semana[3]."<br>";
			
			echo "-----------------<br>";			
			
			
			
									//=============================================//
			//reccorrer un array indexado
			for($i = 0; $i < count($semana); $i++){
				echo $semana[$i]."<br>";	
			}
			//Agrega un elemento al array en la siguiente posicion
			$semana[] = "Viernes";
			for($i = 0; $i < count($semana); $i++){
				echo $semana[$i]."<br>";	
			}	
			echo "-----------------<br>";
			
			
			
									//=============================================//						
			//arrays asociativos ( "clave" => "valor")
			
			$datos = array("Nombre" => "Juan", "Apellido" => "Gómez", "Edad" => 21);
			
			echo $datos["Apellido"]."<br>";

			echo "-----------------<br>";
			
			
			
									//=============================================//
			//$datos = "Martín";								
			// is_array() es una funcion que devuelve un bool (true si una variable es un array)
			if(is_array($datos)){
				echo "Es un Array<br>";
			}else{
				echo "No es un Array, lo siento<br>";	
			}
			
			echo "-----------------<br>";
			
			
			
									//=============================================//
			//recorrer un array asociativo con un foreach
			foreach($datos as $clave => $valor){
				echo "A $clave le corresponde $valor<br>";
			}
			//solo con el valor
			foreach($datos as $valor){
				echo "$valor<br>";
			}
			
			//Agregar un elemento al array asociativo
			$datos["Pais"] = "España";
			foreach($datos as $clave => $valor){
				echo "A $clave le corresponde $valor<br>";
			}
			
			echo "-----------------<br>";
			
			
			
									//=============================================//
			//Ordenar un array, en este caso alfabeticamente
			sort($semana);
			for($i = 0; $i < count($semana); $i++){
				echo $semana[$i]."<br>";	
			}
			
			
		?>
	</body>
</html>