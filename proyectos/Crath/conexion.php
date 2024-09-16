<?php 
$conexion = mysqli_connect('localhost', 'daniponc_car', 'Marian_86', 'daniponc_mc_form');
//Verificamos si funcionó
If(mysqli_connect_errno($conexion)){
     //Si no funcionó, mostramos el mensaje de error
    echo "No se pudo conectar porque: " .
       mysqli_connect_error();

 }