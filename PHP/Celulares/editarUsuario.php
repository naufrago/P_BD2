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
					
						<a ><img src="images/logo1.png" width="75px" alt="" /></a>
					</div>
						<div class="header_top_right" id="admin">
							  	<center><span>Bienvenido:  <?php echo strtoupper($nombre." ".$apellido); ?></span></center>
					</div>
			     <div class="clear"></div>
  		    </div>     

  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="inicioUsuario.php">Inicio</a>
						</li>
						<li>
							<a href="#">Usuarios</a>
								<ul>
								<li><a href="listarUsuarios.php">Listar</a></li>
								<li><a href="ingresarUsuario.php">Ingresar</a></li>
								</ul>
						</li>
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

				  <div class="contact-form">
				  	<center><h3>Editar Datos </h3></center>
				  	<?php							
						//capturo el status para haci lanzar el error
						if(isset($_GET['status']) and $_GET['status']==1)
						{
					?>
						<div class="alert alert-success alert-dismissable">
                                Datos Actualizados Correctamente
                        </div>
					   <br/><br/>

					<?php
						}
					?>
					<?php
      					$idusuario=$_GET['idusuario'];
      					$consulta="SELECT * FROM usuario WHERE idusuario='$idusuario'";
      					$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());
      					$fila=pg_fetch_assoc($resultado);
      				?>
					    <form method="post" action="script-editarUsuario.php" enctype="multipart/form-data" 
					    onsubmit="return validacion(nombre.value,apellido.value,contrasena.value,direccion.value,correo.value,telefono.value)" name="f_editar" id="f_editar">
					    	<label>IdUsuario</label>
					    	<input type="text" name="idUsuario" class="form-control" value="<?php echo $fila['idusuario']; ?>" readonly>

					    	<label>Nombre</label>
					    	<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" >

					    	<label>Apellido</label>
					    	<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $fila['apellido'];?>" >
					    	
					    	<label>Contraseña</label>
					    	<input type="text" name="contrasena" id="contrasena" class="form-control" value="<?php echo $fila['contrasena']; ?>" >
					    	
					    	<label>Direccion</label>
					    	<input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $fila['direccion']; ?>" >
					    	
					    	<label>Correo</label>
					    	<input type="text" name="correo" id="correo" class="form-control" value="<?php echo $fila['correo'];?>" >
								    	
					    	<label>Telefono</label>
					    	<input type="text" name="telefono" id='telefono' class="form-control" value="<?php echo $fila['telefono']; ?>" >

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

	function validacion(nom,ape,cont,dire,cor,tele){

		var nombre=nom;
		var apellido=ape;
		var contrasena=cont;
		var direccion=dire;
		var correo=cor;
		var telefono=tele;
		var mensaje="";

		if (nombre=="") {
			mensaje=mensaje+"EL CAMPO DE NOMBRE NO DEBE ESTAS VACIO,\n";
		}

		if (apellido=="") {
			mensaje=mensaje+"EL CAMPO DE APELLIDO NO DEBE ESTAS VACIO,\n";
		}

		if (contrasena=="") {
			mensaje=mensaje+"EL CAMPO DE CONTRASEÑA NO DEBE ESTAS VACIO,\n";
		}

		if (direccion=="") {
			mensaje=mensaje+"EL CAMPO DE DIRECCION NO DEBE ESTAS VACIO,\n";
		}

		if (correo=="") {
			mensaje=mensaje+"EL CAMPO DE CORREO NO DEBE ESTAS VACIO,\n";
		}

		if (telefono=="") {
			mensaje=mensaje+"EL CAMPO DE TELEFONO NO DEBE ESTAS VACIO,\n";
		}

		
		if (mensaje=="") {
			return true;
		}else{
			alert(mensaje);
			return false;
		}
	}
	</script>
    <a href="#" id="toTop"> </a>
    <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

