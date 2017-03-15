<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays Multidimensionales</title>
	</head>
	
	<body>
		<?php 
			
			$alimentos = array(	
								"fruta"	=>	array(	
													"tropical" 	=> 	"kiwi",
													"citrico" 	=>	"mandarina",
													"otros"		=>	"manzana"
												),
								"leche"	=>	array(	
													"animal"	=> "vaca",
													"vegetal"	=> "coco"
												), 
								"carne"	=>	array(
													"vacuno"	=> "solomillo",
													"porcino"	=> "jamon"
												)
							);
			
			//echo $alimentos["carne"]["vacuno"];
			
			foreach($alimentos as $claveAlim => $valorAlim){
				echo "$claveAlim: <br>";
				
				while(list($clave, $valor) = each($valorAlim)){ //Por cada $valorAlim lo desdoble en su clave valor
					echo "$clave = $valor<br>";
				}
				echo "<br>";
			}
			
			echo "============================";
			
			var_dump($alimentos);
			
		?>
	</body>
</html>