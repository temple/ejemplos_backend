<?php

$alumnado = array('musa'=>true,
				  'walaa'=>false,
				  'jose m'=>true
				);

$hoja_de_firmas = array(
		1=>$alumnado,
		2=>$alumnado,
		3=>$alumnado,
		4=>$alumnado,
		5=>$alumnado);

for($dia=1; true; $dia++){

	if ($dia==count($hoja_de_firmas)+1)
		break;
    
    $firmas = $hoja_de_firmas[$dia];

    foreach($firmas as $nombre => $ha_firmado){
    	if ($ha_firmado)
    		continue;
    	pedirFirmaA($nombre);
    } 



}
