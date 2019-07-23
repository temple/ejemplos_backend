<?php

$var = "string de texto";
// creo una variable y veo su "type"
var_dump($var);

$ha_funcionado = settype($var,"integer");
var_dump($ha_funcionado);
var_dump($var); // var ahora es integer

// pruébalo con "bool", "string", "array"
