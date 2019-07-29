<?php

abstract class AbstractSaluter{
	function salute($name){
		echo $this->mensaje.$name."\n";
	}

    static protected $idioma;
    // Es una propiedad (puede cambiar de valor) que compartirán todos los objetos.
    // Como es una propiedad común, le ocurre los mismo que a las constantes
    // para poder hacerle referencia podemos usar el nombre de la clase y el acceso ::
    // o la palabra reservada self con el acceso ::
    
    static public function createSimpleSaluter(){
    	switch (self::$idioma) {
    		// las propiedades comunes (estáticas) requieren usar el $ para no ser confundidas con constantes de clase
    	 	case 'french':
    	 		$result = new FrenchSaluter();
    	 		break;
    	 	
    	 	default:
    	 		$result = new CatalanSaluter();
    	 		break;
    	 } 
    	return $result;
    }
}

class FrenchSaluter extends AbstractSaluter{
	public $mensaje = "Bonjour ";
}

class CatalanSaluter extends AbstractSaluter{
    public $mensaje = "Què tal ";
}

$saluter = AbstractSaluter::createSimpleSaluter();
// las funciones estáticas no requieren crear ningún objeto y se invocan usando :: sobre la clase

$saluter->salute("Armando");
