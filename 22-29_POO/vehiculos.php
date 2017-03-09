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
		
		function estableceColor($colorCoche, $nombreCoche){
			$this->color = $colorCoche;
			echo "El color del coche $nombreCoche es: ".$this->color."<br>";
		}
	}
	
	
	//---------------------------------------------------------------------------------------\\
	
	
	
	class Camion extends Coche{
		
		function Camion(){ //Metodo constructor
			//parent::__construct(); //Para llamar al constructor del padre
			//con $this llamamos al objeto de la clase
			$this->ruedas = 8;
			$this->color = "gris";
			$this->motor = 2600;
		}
		
		function estableceColor($colorCamion, $nombreCamion){
			$this->color = $colorCamion;
			echo "El color del camion $nombreCamion es: ".$this->color."<br>";
		}
		
		function arrancar(){
			//Como un super de toda la vida
			parent::arrancar();
			echo "Camión arrancado<br>";
		}
		
	}
	

?>