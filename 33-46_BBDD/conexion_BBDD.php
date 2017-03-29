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
			
			$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContra); //Nos conectamos al SERVIDOR de BBDD
			
			
			if(mysqli_connect_errno()){ //Controlamos el error de conexion al servidor
				echo "Fallo al conectar con el servidor de BBDD";
				exit();
			}
			
			mysqli_select_db($conexion, $dbNombre) or die("No se encuentra la BBDD"); //Nos conectamos a BBDD especifica
			
			mysqli_set_charset($conexion, "utf8"); //Para arreglar lo de las tildes de los huevos
			
			
			
			
			$consulta = "select * from datospersonales";
			
			$resultados = mysqli_query($conexion, $consulta);
			
			
			//while( ($fila = mysqli_fetch_row($resultados)) == true ){ //Si hay informacion en el resultset
			while($fila = mysqli_fetch_row($resultados)){ //Es lo mismo
				
				echo $fila[0]." ";
				echo $fila[1]." ";
				echo $fila[2]." ";
				echo $fila[3]." ";
				echo "<br>";
			
			}
			
			
		?>
	</body>
</html>