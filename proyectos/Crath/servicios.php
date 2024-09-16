<!DOCTYPE html >
<!DOCTYPE html >
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crath</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	

	<header> 
		<div class="contenedores">
			<div class="logo">
			<img src="img/logocrath.png" width="200"  height="90"  alt="Crath" >
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
		<h2>SERVICIOS</h2>

<p class="servicios">Cada evento es único, sabemos reconocer las ideas de los clientes.	A travez  de  nuestra experiencia logramos fusionar el sueño de nuestro cliente con seriedad, compromiso, profesionalismo e innovación que ofrecemos. </br></br>
Al momento de planear un evento, no dude en contactarnos, tendremos la propuesta adecuada que usted está necesitando.
</p> 


		
 <?php
        include ('conect.php');

        $result = mysqli_query($conexion, "SELECT * FROM servicio") or die(mysqli_error($conexion));

        if(mysqli_num_rows($result)!=0){

    ?>
   
	<?php

        while ($row = mysqli_fetch_array($result)){
     ?>


    
<div class="eventos">
	 <a href="detalle.php?id=<?php echo $row['id_servicio']?>"><h3><?php echo $row['nombre']?></h3></a>
</div>



<?php   
        }
?>
 <?php
}
?>

    </section>
	<footer>
		<p class="Copyright">Copyright 2015- Crath</p>
		<p class="autor">Creado por: Mariana Carballo</p>
		
	</footer>
	
</body>
</html>