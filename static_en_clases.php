<?php

abstract class AbstractSaluter{
	function salute($name){
		echo $this->mensaje.$name."\n";
	}

    static protected $idioma;
    
    static public function createSimpleSaluter(){
    	switch (self::$idioma) {
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

$saluter->salute("Armando");
