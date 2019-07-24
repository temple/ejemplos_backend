<?php
  $variable_con_array = [
      0    => "valor string",
      2    => new \StdClass(),
              534,
      -2   => false,
              null,
              8
  ];

  foreach($variable_con_array as $i => $valor){
  	print("La variable i está en la posición ".$i." del array\n");
  }


    $variable_con_array = [
      -10    => "valor string",
      -12    => new \StdClass(),
      -4    =>    534,
      -2   => false,
              null,
              8
  ];

    foreach($variable_con_array as $i => $valor){
    print("La variable i está en la posición ".$i." del array\n");
  }
