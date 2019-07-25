<?php

// El operador instanceof hace lo mismo que en Javascript
class MiClase{}

class NoMiClase{}

$a = new MiClase;
$b = true;
$c = "cadena";
$i = 10;
$n = 23842.2342;

var_dump($a instanceof MiClase);

var_dump($a instanceof NoMiClase);

// En PHP el operador mas parecido a typeof es gettype

var_dump(gettype($a));
var_dump(gettype($b));
var_dump(gettype($c));
var_dump(gettype($i));
var_dump(gettype($n));


