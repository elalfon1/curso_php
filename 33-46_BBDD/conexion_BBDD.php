<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>
	</head>

	<body>
		<?php 
			
			$dbHost		=	"localhost";
			$dbNombre	=	"pruebas";
			$dbUsuario	=	"root";
			$dbContra	=	"ganon1";
			
			//´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´POR PROCEDIMIENTOS´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´\\
			
			$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContra, $dbNombre);
			
			mysqli_set_charset($conexion, "utf8"); //Para arreglar lo de las tildes de los huevos
			
			
			
			
			$consulta = "select * from datospersonales";
			
			$resultados = mysqli_query($conexion, $consulta);
			
			$fila = mysqli_fetch_row($resultados);
			
			echo $fila[0]." ";
			echo $fila[1]." ";
			echo $fila[2]." ";
			echo $fila[3]." ";
			
			
		?>
	</body>
</html>