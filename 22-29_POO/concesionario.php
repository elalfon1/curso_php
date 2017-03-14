<?php 

	class CompraVehiculo{
		
		private $precioBase;
		
		//creamos un campo static que lo comparten todos los objetos de la clase
		private static $ayuda = 0;
		
		function CompraVehiculo($gama){
			if($gama == "urbano")
				$this->precioBase = 10000;
			else if($gama == "compacto")
				$this->precioBase = 20000;
			else if($gama == "berlina")
				$this->precioBase = 30000;
		}
		
		//creamos un metodo static que lo comparten todos los objetos de la clase/
		static function planPIVE(){
			if( date("Y-m-d") > "2015-01-31" ) //si hoy es mayor a esa fecha si se ejecuta
				self::$ayuda = 4500;
		}
		
		function climatizador(){
			$this->precioBase += 2000;
		}
		
		function navegadorGPS(){
			$this->precioBase += 2500;
		}
		
		function tapiceriaCuero($color){
			if($color == "blanco")
				$this->precioBase += 3000;
			else if($color == "beige")
				$this->precioBase += 3500;
			else 
				$this->precioBase += 5000;
		}
		
		function precioFinal(){
			//Para hacer referencia a campos estaticos (de clase) usamos 'self::'
			$valorFinal = $this->precioBase - self::$ayuda;
			
			return $valorFinal;	
		}
		
	}
?>