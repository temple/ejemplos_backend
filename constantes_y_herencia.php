<?php

class ClaseConConstantes{
	const CONSTANTE = ['4',5];
	// La constante CONSTANTE SE HA DEFINIDO POR PRIMERA VEZ

}

class ClaseDescendiente extends ClaseConConstantes{
	const CONSTANTE = ['2',3];


}

print_r(ClaseDescendiente::CONSTANTE);
print_r(ClaseConConstantes::CONSTANTE);
