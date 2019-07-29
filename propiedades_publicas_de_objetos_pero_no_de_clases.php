<?php

class MiClase{
	
	public $propiedad1 = "valor";
	// todos los nuevos objetos
	// tendrán este valor en la propiedad 1
}

$objeto = new MiClase();
$objeto->propiedad1 = "valor 1";
// el objeto cambia el valor de su propiedad1, pero solo para el

$objeto2 = new MiClase();
$objeto2->propiedad2 = "valor 2";
// el objeto2 se inventa una propiedad pública
// esta propiedad es solo del objeto2

$objeto3 = new MiClase();
//objeto 3 tiene propiedad1 con el valor 
//que está definido en MiClase


var_dump([$objeto, $objeto2, $objeto3]);