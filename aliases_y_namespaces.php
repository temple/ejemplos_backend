<?php

namespace primero;
class A{
	
}

namespace segundo;
class A{
	
}

namespace tercero;

use primero\A;
use segundo\A as segundoA;

$objeto_clase_A_primero = new A();

$objeto_clase_A_segundo = new segundoA();

var_dump($objeto_clase_A_primero, $objeto_clase_A_segundo);