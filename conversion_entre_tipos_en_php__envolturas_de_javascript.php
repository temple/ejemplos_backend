<?php
/**
  Las envolturas en PHP funcionan parecido a Javascript
  En javascript se creaban envolturas de valores usando los tipos simples
  y se obtenía el valor transformado del tipo original al tipo deseado
  PE:
  - var variable_boolean = Boolean("false");
  - var variable_number  = Number(false);
  - var variable_texto   = String(0.324234);

  Para obtener el valor en otro tipo, PHP permite poner la envoltura delante del valor.
  Veamos el anterior ejemplo en PHP:
  */

  $variable_boolean = (boolean) "false";
  $variable_number  = (float) false;
  $variable_texto   = (string) 0.324234;
