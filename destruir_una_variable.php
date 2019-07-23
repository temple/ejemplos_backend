<?php

$var = "string de texto";
// creo una variable y veo su "type"

$type = gettype($var);
var_dump($type);
// Que dará $type?

unset($var);
// destruyo la variable



$type = gettype($var);
var_dump($type);
// Que dará $type?