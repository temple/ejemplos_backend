<?php
// un comentario es una instrucción que no hace nada
// los comentarios no tienen ";" al final
echo "Esta instrucción si hace algo y usa un ; al final" ;

echo "La última instrucción antes del fin de php (?>) no necesita ;"
?>
<?php
if (TRUE){
  echo "Las sentencias son instrucciones que usan llaves { }";	
  if (TRUE){
      echo "Las sentencias son instrucciones que usan llaves { }";	
      if (TRUE){
         echo "Las sentencias son instrucciones que usan llaves { }";	
      }
  }
}
// La llave de cierre de una sentencia "}" hace de ";"

# CUANDO TODO EL CÓDIGO A PARTIR DE <?php HASTA EL FINAL, 
# ESTÁ ESCRITO EN PHP
# NO HACE FALTA PONER LA MARCA DE FIN ?>