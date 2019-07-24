<script>
	var variable_con_array = ["valor string",{},543,false,null,undefined];
    for (var i in variable_con_array){
    	console.log("La variable i está en la posición ",i, " del array");
    }
</script>

<?php
  $variable_con_array = [
      "a" => "valor string",
      "b" => new \StdClass(),
      534,
      1   => false,
      4   => null,
  ];

  foreach($variable_con_array as $i => $valor){
  	print("La variable i está en la posición ".$i." del array");
  }