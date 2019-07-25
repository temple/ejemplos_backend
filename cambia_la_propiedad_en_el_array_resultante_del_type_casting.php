<?php
/**
  Ahora que hemos visto las envolturas con tipos escalares
  veámoslas con tipos no escalares, como array o object
  */

  $object = new \StdClass();
  $object->propiedad = "valor";

  $variable_array = (array) $object;
  
  $variable_array[] = "nuevo_valor";


  var_dump([$object,$variable_array]);