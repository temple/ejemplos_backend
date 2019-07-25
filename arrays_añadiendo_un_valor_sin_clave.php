<?php
// Los arrays toman el último valor entero para las claves numéricas

$matriz = array("foo" => "bar", 12 => true, false);
// como 12 es el último valor entero usado para claves numéricas
// la siguiente clave numérica (valor false) 
// continuará a partir de 12, por lo tanto será 13

print_r($matriz);

// Veamos ahora como se añadiría un valor "false" a un array como el anterior, pero de solo 2 posiciones
// los print_r daran el mismo resultado
$matriz = array("foo" => "bar", 12 => true);
$matriz[] = false;

print_r($matriz);