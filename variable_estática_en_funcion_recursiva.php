<?php
// VARIABLE ESTÁTICA EN FUNCIÓN RECURSIVA
function Test()
{
	static $count = 0;
	$count++; // Count se incrementa
	echo $count."\n";
	if ($count < 10) {
		Test (); // La función se ejecuta a sí misma
	}
	$count--; // Count se decrementa
	echo $count."\n";
}

Test();
?>