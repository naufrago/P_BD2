<?php 
	include "conexion.php"; 
	include "controlSesion.php";
	include "datosUsuario.php";
	include "bootstrap.php";
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>UpCellphone-Administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
					
						<a href="menuUsuario.php"><img src="images/logo1.png" width="75px" alt="" /></a>
					</div>
						<div class="header_top_right">
							  	<span> Bienvenido <?php echo $nombre." ".$apellido; ?></span>
					</div>
			     <div class="clear"></div>
  		    </div>     

  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="menuUsuario.php">Inicio</a>
						</li>
						<!--<li  class="test">
						</li>-->
						<li>
							<a href="perfilUsuario.php">Perfil</a>
						</li>

						<li>
							<a href="#">Celulares</a>
								<ul>
								<li><a href="listarCelulares.php">Listar</a></li>
								<li><a href="ingresarCelular.php">Ingresar</a></li>
								</ul>
						</li>
						<!--
						<li>
							<a href="#">ventas</a>

						</li>
						-->
						<li>
							<a  href="cerrarSesion.php">Cerrar Sesion</a>
						</li>
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>

   		</div>
   </div>

   <div class="main">
 	<div class="wrap">
     <div class="preview-page">
     				<div class="contact_info">
					    	  <!--<div class="map">
							   	    <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#888;text-align:left;font-size:0.85em">View Larger Map</a></small>
							  </div>-->
      				</div>

      				<?php
      					$codigocelular=$_GET['codigocelular'];
      					$consulta="SELECT * FROM celular WHERE codigocelular='$codigocelular'";
      					$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());
      					$fila=pg_fetch_assoc($resultado);
      				?>

				  <div class="contact-form">
				  	<center><h3>Editar Celular</h3></center>
					    <form method="post" action="script-editaCelular.php" enctype="multipart/form-data" >
					    	
					    	<label>Codigo Celular</label>
					    	<input type="text" name="codigocelular" class="form-control" value="<?php echo $fila['codigocelular']?>" readonly>
					    	<label>Marca</label>
					    	<input type="text" name="marca" class="form-control" value="<?php echo $fila['marca']?>">
					    	<label>Referencia</label>
					    	<input type="text" name="referencia" class="form-control" value="<?php echo $fila['referencia']?>">
					    	<label>Cantidad</label>
					    	<input type="text" name="cantidad" class="form-control" value="<?php echo $fila['cantidad']?>">
					    	<label>Procesador</label>
					    	<input type="text" name="procesadorghz" class="form-control" value="<?php echo $fila['procesadorghz']?>">
					    	<label>Almacenamiento Externo</label>
					    	<input type="text" name="almexternogb" class="form-control" value="<?php echo $fila['almexternogb']?>">
					    	<label>Almacenamiento Interno</label>
					    	<input type="text" name="alminternogb" class="form-control" value="<?php echo $fila['alminternogb']?>">
					    	<label>Memoria</label>
					    	<input type="text" name="memoriagb" class="form-control" value="<?php echo $fila['memoriagb']?>">
					    	<label>Camara</label>
					    	<input type="text" name="camarampx" class="form-control" value="<?php echo $fila['camarampx']?>">
					    	<label>Pantalla</label>
					    	<input type="text" name="pantallapx" class="form-control" value="<?php echo $fila['pantallapx']?>">
					    	<label>Sistema Operativo</label>
					    	<input type="text" name="sistoperativo" class="form-control" value="<?php echo $fila['sistoperativo']?>">
					    	<label>Dimensiones</label>
					    	<input type="text" name="dimensionesm" class="form-control" value="<?php echo $fila['dimensionesm']?>">
					    	<label>Operador</label>
					    	<input type="text" name="operador" class="form-control" value="<?php echo $fila['operador']?>">
					    	<label>Costo</label>
					    	<input type="text" name="costo" class="form-control" value="<?php echo $fila['costo']?>">
					    	<label>Precio</label>
					    	<input type="text" name="precio" class="form-control" value="<?php echo $fila['precio']?>">
					    	<label>Imagen</label>
					    	<input type="file" name="imagen" >

						   <div>
						   		<center><input type="submit" value="Guardar Cambios"  class="mybutton"></center>
						   		<input type="hidden" name="_token" value="{{csrf_token()}}"></input>
						  </div>
					    </form>
				  </div>
			  </div>		
         </div> 
    </div>
 </div>

   <!------------End Header ------------>
  
   <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
		   </div>	
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Grupo</a> : Yeison Aguirre
											-David Cantillo
											-Cristian Galvis </li>

		   	</ul>
		   </div>		
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

