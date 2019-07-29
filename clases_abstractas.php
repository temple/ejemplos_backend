<?php

class ClaseSimple{

}

$objeto = new ClaseSimple();

abstract class ClaseAbstracta{

}

//$objeto = new ClaseAbstracta();

// Ejemplo de uso de clase abstracta

abstract class AbstractSaluter{
	function salute($name){
		echo $this->mensaje.$name."\n";
	}
}

class FrenchSaluter extends AbstractSaluter{
	public $mensaje = "Bonjour ";
}

class CatalanSaluter extends AbstractSaluter{
    public $mensaje = "Què tal ";
}

class CatalanPoliteSaluter extends CatalanSaluter{
    public $mensaje = "Què tal -name-? Com us va la vida?";
    function salute($name){
    	echo str_replace("-name-", $name, $this->mensaje);
    }
}


$objeto_French = new FrenchSaluter();
$objeto_French->salute("Xavi");

$objeto_Catalan = new CatalanSaluter();
$objeto_Catalan->salute("Xavi");


$objeto_CatalanPolite = new CatalanPoliteSaluter();
$objeto_CatalanPolite->salute("Xavi");