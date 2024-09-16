<?php
//Creamos una conexión
$con = mysqli_connect('localhost','root','','');
//Verificamos si funcionó
If(mysqli_connect_errno($con)){
//Si no funcionó, mostramos el mensaje de error
  echo "No se pudo conectar porque: " . mysqli_connect_error();
 //exit();
  }
mysqli_close($con);

?>