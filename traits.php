<?php

/** 
 * Un trait es un rasgo que reune una série de propiedades (y funciones),
 * que en su conjunto no llegan a formar una clase.
 * Los trais están pensados para usarse en una o varias clases
 * que necesiten ese "subconjunto" de propiedades o funciones.
 */

trait Idiomas{
   public $hablados = array();
   protected $escritos = array();

   public function traducir($texto){
   	 /// código
   	 echo "\n\nTraduzco el ".$texto."\n Soy la función traducir del trait Idiomas.\n";
   }
}

trait Horario{
	public $mañana = false;
	private $tarde = true;
	public $noche = false;
}

class OficinaAtencionTuristica{
	use Horario;
	use Idiomas;
}

class Barman_maid{
	use Idiomas;
	use Horario;
	public $dias_disponibles;
}

$Barman_maid = new Barman_maid();
$Attender = new OficinaAtencionTuristica();
$Attender->traducir("translate me");

var_dump($Barman_maid, $Attender);