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
    if($_GET) {
        if($_GET['e']=='ok') { ?>
<!--             vinculado con enviar_mensaje para saber que se envio bien el mensaje-->
        <h3>Gracias por contactarse con nosotros.</h3>
        <p>A la brevedad responderemos a su consulta.</p>
<?php
        }
    } else {
    ?>
		<form action="enviar_mensaje.php" method="POST" class="formulario" id="">
	 			<p> 
	 				<label for="nombre">Nombre</label>
	 				<input type="text" name="nombre" id="nombre" required />
	 			</p>
	 			<p> 
	 				<label for="email">Email</label>
	 				<input type="text" name="correo" id="email" required />
	 			</p>
	 			
	 			<p> 
	 				<label for="tel">Teléfono</label>
	 				<input type="text" name="tel" id="tel" required />
	 			</p>
	 			<p> 
	 				<label for="mensaje">Mensaje</label>
	 				<textarea name="mensaje" id="mensaje"></textarea>
	 			</p>
	 			<p class="acciones">
	 				<input type="submit" value="Enviar" />
	 			</p>
	 		</form>
	 		   <?php } ?>
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