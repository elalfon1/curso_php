<?php 

	class Coche{
		var $ruedas;
		var $color;
		var $motor;
		
		function Coche(){ //Metodo constructor
			//con $this llamamos al objeto de la clase
			$this->ruedas = 4;
			$this->color = "";
			$this->motor = 1600;
		}
		
		function arrancar(){
			echo "Estoy arrancando<br>";
		}
		
		function girar(){
			echo "Estoy girando<br>";
		}
		
		function frenar(){
			echo "Estoy frenando<br>";
		}
		
		function estableceColor($color, $nombre){
			$this->color = $color;
			echo "El color del coche $nombre es: ".$this->color."<br>";
		}
	}
	
	
	//---------------------------------------------------------------------------------------\\
	
	
	
	class Camion{
		var $ruedas;
		var $color;
		var $motor;
		
		function Camion(){ //Metodo constructor
			//con $this llamamos al objeto de la clase
			$this->ruedas = 8;
			$this->color = "gris";
			$this->motor = 2600;
		}
		
		function arrancar(){
			echo "Estoy arrancando<br>";
		}
		
		function girar(){
			echo "Estoy girando<br>";
		}
		
		function frenar(){
			echo "Estoy frenando<br>";
		}
		
	}
	
	
	/*
	//Instanciamos la clase llamando al constructor
	$renault = new Coche();
	
	$mazda = new Coche();
	
	$seat = new Coche();

	//$mazda->girar();
	//echo $mazda->ruedas;
	
	//Le pasamos parametros al metodo
	$renault->estableceColor("Rojo", "Renault");
	$seat->estableceColor("Azul", "Seat");*/

?>