<?php

// VAmos a probar a cambiar el tipo a una variable,
// pero si sale mal, pues hacemos "deshacer"
// la documentación de settype está en
// https://www.php.net/manual/es/function.settype.php

$backup_de_a = $a = "valor para convertir a object";

$ha_ido_bien = settype($a,"object");


if (FALSE == $ha_ido_bien){
	$a = $backup_de_a;
}
// YODA CONDITION: SE PONE EL VALOR A COMPARAR PRIMERO Y LA VARIABLE DESPUÉS
// https://en.wikipedia.org/wiki/Yoda_conditions
