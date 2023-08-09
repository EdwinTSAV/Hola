<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		//este campo static quiere decir que no pertenece a ningun objeto de clase vehiculo
		//este campo solo pertenece a la clase
		//si colocamos asi, este metodo puede llegar a colocarse siempre
		//y no en epocas de descuentos, del gobierno, video 29
		//private static $ayuda=4500;
		//Entonces se coloca asi y se cree un metodo para darle el valor de 4500:
		private static $ayuda=0;
		
				
		function __construct($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		//Aca se crea un metodo estatico, mismo concepto que variable static
		//Un metodo que le pertenece a la clase y no a todos
		//como esta funcion no se ejecuta si no se llama, entonces si no se ejecuta nunca
		//nunca se le asignara valor a la ayuda
		static function descuento_gobierno(){
			//cuando aplicar ayuda en concreto:
			if(date("m-d-y")> "09-09-2025"){
				self::$ayuda=4500;
			}
		}
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			/*Como $ayuda es estatic, le pertenece solo a la clase, no se puede usar
			el valor $this, porque se refiere a cada objeto
			y para el campo static se debe usar self:: ya no 
			$this->*/ 
			//$valor_final = $this->precio_base-$this->$ayuda;
			//Si lo coloco asi como arriba marca error
			$valor_final = $this->precio_base-self::$ayuda;
			
			return $valor_final;	

		}// fin precio final
		
		
		
	}// fin clase


?>