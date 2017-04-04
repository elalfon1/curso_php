<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>
		<style>
			table{
				width: 60%;
				border: dotted #000 1px;	
				margin:auto;
			}
			td{
				border-bottom: dotted #000 1px;
			}
			tr:last-child td{
				border: none;
			}
		</style>
	</head>

	<body>
		<?php 
			
			require("datos_conexion.php");
			
			//´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´POR PROCEDIMIENTOS´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´\\
			
			$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContra); //Nos conectamos al SERVIDOR de BBDD
			
			
			if(mysqli_connect_errno()){ //Controlamos el error de conexion al servidor
				echo "Fallo al conectar con el servidor de BBDD";
				exit();
			}
			
			mysqli_select_db($conexion, $dbNombre) or die("No se encuentra la BBDD"); //Nos conectamos a BBDD especifica
			
			mysqli_set_charset($conexion, "utf8"); //Para arreglar lo de las tildes de los huevos
			
			
			
			
			$consulta = "select * from productos ORDER BY CODART";
			
			$resultados = mysqli_query($conexion, $consulta);
			
			
			//while( ($fila = mysqli_fetch_row($resultados)) == true ){ //Si hay informacion en el resultset
			
			echo "<table>";
			while($fila = mysqli_fetch_row($resultados)){ //Es lo mismo
				
				echo "<tr>";
				for($i = 0; $i < count($fila); $i++){
					echo "<td>".$fila[$i]."</td>";
				}
				echo "</tr>";
			
			}
			echo "</table>";
			
		?>
	</body>
</html>