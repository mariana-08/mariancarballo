<?php
require("conex.php");
if (isset($_POST['register'])){
if (strlen($_POST['email1']) >= 1 && strlen($_POST['nombre1']) >= 1) {
	$email1 = trim ($_POST['nombre1']);
	$nombre1 = trim ($_POST['nombre1']);
	$fecha_reg = date("d/m/y"); 
	$sql = "INSERT INTO registrar(email, nombre, fecha_reg) VALUES ('$email1','nombre1','$fecha_reg')";
	$resultado = mysql_query($sql, $conex);
	if ($resultado){
		?> <div class="ok"></div>
		<?php
	} 
}
}
?>