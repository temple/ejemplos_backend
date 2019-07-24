<?php		

$array1 = [1,[22,3]]; 


$array2 = [22,3];
$array3 = [1, $array2]; 


$array4 = [new \StdClass(), new \StdClass()];

$objeto1 = new \StdClass();
$objeto2 = new \StdClass();
$array_con_objetos = [$objeto1,$objeto2];

$array_con_array_con_objetos = [1,$array_con_objetos];
$array_con_array_con_objetos_version_fast = [
											  new \StdClass(),
											  [new \StdClass(), new \StdClass()]
											];

$array_con_claves_y_objetos_y_arrays =  [
											"a" => new \StdClass(),
											"b" => [new \StdClass(), new \StdClass()]
										];


$object1 = new \StdClass();
$object2 = new \StdClass();
$object3 = new \StdClass();
$array_with_objects = [$object2,$object3];
$array_con_claves_y_objetos_y_arrays = [ "a" => $object1,
                                         "b" => $array_with_objects];	
