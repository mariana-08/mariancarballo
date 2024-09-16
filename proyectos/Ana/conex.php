 <?php
 $conex = mysqli_connect('localhost','c1651449_Ana2020','Agiorgi2020','c1651449_anaweb'); //(servidor,usuario,contraseña,bd)


if (!$conex){
    die("Fallo la conexion con la base de datos" . mysqli_error($conex));
}

?> 