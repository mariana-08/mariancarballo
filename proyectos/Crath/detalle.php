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

	<section class="conter">
	
	<?php
        include ('conect.php');

        $id =$_GET['id'];

        $result = mysqli_query($conexion, "SELECT * FROM servicio WHERE id_servicio=$id") or die(mysqli_error($conexion));

        if(mysqli_num_rows($result)!=0){
            $row =mysqli_fetch_array($result);

        ?>
        <h3><?php echo $row['nombre']?></h3>

        <?php 

            $result2 = mysqli_query($conexion, "SELECT * FROM imagenes_servicio WHERE id_servicio= $id") or die(mysqli_error($conexion));


            while ($row2 =mysqli_fetch_array($result2)){
                   	
                echo '<img src="'.$row2['ruta_imagen'].'" width="150" />';
            }
            ?>

            <p class="descrip"><?php echo nl2br (utf8_encode ($row['descripcion']))?></p>

           

    <?php
}
        else {
            echo '<p>Servicio Inexistente</p>';
    }

    ?>
    <div class="atras">
    <a href="servicios.php"> Volver</a>	
	</div>	
	</section>
	
	
	<footer>
		<p class="Copyright">Copyright 2015- Crath</p>
		<p class="autor">Creado por: Mariana Carballo</p>
		
	</footer>
	
</body>
</html>

