<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crath</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	
	<header> 
		<div class="contenedores">
			<div class="logo">
			<img src="img/logocrath.png" width="200"  height="90"  alt="Crath">
		</div>
		<div class="derecha">
		 	<div class="redes">
			<a class="icon-facebook"  href="https://www.facebook.com/djcristian.rath?pnref=story" target="_blank"></a>
			<a class="icon-youtube" href="https://www.youtube.com/watch?v=U0oCGnuIHo8" target="_blank"></a>
			</div>
		
			<nav>
			<ul>
				<li><a href="index.html">INICIO</a></li><li><a href="index.html#quienessomos">QUIENES SOMOS</a></li><li><a href="servicios.php">SERVICIOS</a></li><li><a href="galeria.html">GALERIA</a></li><li><a href="contacto.php">CONTACTO</a></li>
			</ul>
			</nav>
 		</div>

		</div>

	</header>


	 <section class="contenedor">

	 	<div class=" columna left">
	 		<h2>Dejanos tu consulta</h2>

<?php
$nombre_consulta=$_POST['nombre'];
$correo_consulta=$_POST['correo'];
$tel_consulta=$_POST['tel'];
$mensaje_consulta=$_POST['mensaje'];

$destino="mariana_carballofarias@hotmail.com"; 
// a donde quiero que llegue 

$asunto="consulta enviada desde www.crath.com.ar";

$cuerpo_mail="Nombre: ".$nombre_consulta."\r\n";
$cuerpo_mail.="Correo: ".$correo_consulta."\r\n";
$cuerpo_mail="tel: ".$tel_consulta."\r\n";
$cuerpo_mail.="Mensaje: ".$mensaje_consulta."\r\n";

$remitente="From $nombre_consulta  <$correo_consulta>";

mail($destino, $asunto, $cuerpo_mail, $remitente);

echo 'Recibimos su consulta. Nos comunicaremos con usted a la brevedad';

include ('conexion.php');

mysqli_query($conexion,"INSERT INTO consultas values(0,'$nombre_consulta','$correo_consulta',$tel_consulta,'$mensaje_consulta')");


?>
	 	</div>
	 	
	 	<div class=" columna right">
	 		
	 		<h2>Ubicanos</h2>
	 		<ul>
	 				 		
	 			<li><a class="icon-movil" href="#">Teléfono:15-2174-6087</a></li>
	 			<li><a class="icon-mail" href="#">Email:contacto@crath.com.ar</a></li>
	 			<li><a class="icon-facebook" href="#">Facebook:facebook.com/djcristian.rath</a></li>
	 		
	 		</ul>
	 	</div>
	 	
	 </section>
	
	<footer>
		<p class="Copyright">Copyright 2015- Crath</p>
		<p class="autor">Creado por: Mariana Carballo</p>
		
	</footer>
	
	
</body>
</html>







