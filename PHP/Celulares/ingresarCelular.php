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
				  	<center><h3>Registrar Celular</h3></center>
					    <form method="post" action="script-GuardaCelular.php" enctype="multipart/form-data" onsubmit="return validacion(codigocelular.value,marca.value,referencia.value,cantidad.value,procesadorghz.value,almexternogb.value,alminternogb.value,memoriagb.value,camarampx.value,pantallapx.value,sistoperativo.value,dimensionesm.value,operador.value,costo.value,precio.value,imagen.value)" >
					    	
					    	<label>Codigo Celular</label>
					    	<input type="text" name="codigocelular" id="codigocelular" class="form-control">
					    	<label>Marca</label>
					    	<input type="text" name="marca" id="marca" class="form-control">
					    	<label>Referencia</label>
					    	<input type="text" name="referencia"  id="referencia" class="form-control">
					    	<label>Cantidad</label>
					    	<input type="text" name="cantidad" id="cantidad"  class="form-control">
					    	<label>Procesador</label>
					    	<input type="text" name="procesadorghz" id="procesadorghz" class="form-control">
					    	<label>Almacenamiento Externo</label>
					    	<input type="text" name="almexternogb" id="almexternogb"class="form-control">
					    	<label>Almacenamiento Interno</label>
					    	<input type="text" name="alminternogb" id="alminternogb" class="form-control">
					    	<label>Memoria</label>
					    	<input type="text" name="memoriagb" id="memoriagb" class="form-control">
					    	<label>Camara</label>
					    	<input type="text" name="camarampx" id="camarampx" class="form-control">
					    	<label>Pantalla</label>
					    	<input type="text" name="pantallapx" id="pantallapx" class="form-control">
					    	<label>Sistema Operativo</label>
					    	<input type="text" name="sistoperativo"  id="sistoperativo" class="form-control">
					    	<label>Dimensiones</label>
					    	<input type="text" name="dimensionesm" id="dimensionesm" class="form-control">
					    	<label>Operador</label>
					    	<input type="text" name="operador"  id="operador" class="form-control">
					    	<label>Costo</label>
					    	<input type="text" name="costo"  id="costo" class="form-control">
					    	<label>Precio</label>
					    	<input type="text" name="precio"  id="precio" class="form-control">
					    	<label>Imagen</label>
					    	<input type="file" name="imagen" id="imagen" >

						   <div>
						   		<center><input type="submit" value="Guardar"  class="mybutton"></center>
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

 
		function validacion(cod,mar,ref,can,pro,almae,almai,mem,cam, pan,os,dim,ope,cos,pre,img){

		var codigo=cod;
		var marca=mar;
		var referencia=ref;
		var cantidad=can;
		var procesador=pro;
		var almacenamientoe=almae;
		var almacenamientoi=almai;
		var memoria=mem;
		var camara=cam;
		var pantalla=pan;
		var sistema=os;
		var dimenciones=dim;
		var operador=ope;
		var costo=cos;
		var precio=pre;
		var imagen=img;

		var mensaje="";
		
		if (codigo=="") {
			mensaje=mensaje+"EL CAMPO DE CODIGO NO DEBE ESTAS VACIO,\n";
		}

		if (marca=="") {
			mensaje=mensaje+"EL CAMPO DE MARCA NO DEBE ESTAS VACIO,\n";
		}

		if (referencia=="") {
			mensaje=mensaje+"EL CAMPO DE REFERENCIA NO DEBE ESTAS VACIO,\n";
		}

		if (cantidad=="") {
			mensaje=mensaje+"EL CAMPO DE CANTIDAD NO DEBE ESTAS VACIO,\n";
		}

		if (procesador=="") {
			mensaje=mensaje+"EL CAMPO DE PROCESADOR NO DEBE ESTAS VACIO,\n";
		}

		if (almacenamientoe=="") {
			mensaje=mensaje+"EL CAMPO DE ALMACENAMIENTO EXTERNO NO DEBE ESTAS VACIO,\n";
		}

		if (almacenamientoi=="") {
			mensaje=mensaje+"EL CAMPO DE ALMACENAMIENTO INTERNO NO DEBE ESTAS VACIO,\n";
		}

		if (memoria=="") {
			mensaje=mensaje+"EL CAMPO DE MEMORIA NO DEBE ESTAS VACIO,\n";
		}

		if (camara=="") {
			mensaje=mensaje+"EL CAMPO DE CAMARA NO DEBE ESTAS VACIO,\n";
		}

		if (pantalla=="") {
			mensaje=mensaje+"EL CAMPO DE PANTALLA NO DEBE ESTAS VACIO,\n";
		}

		if (sistema=="") {
			mensaje=mensaje+"EL CAMPO DE SISTEMA OPERTIVO NO DEBE ESTAS VACIO,\n";
		}

		if (dimenciones=="") {
			mensaje=mensaje+"EL CAMPO DE DIMENCIONES NO DEBE ESTAS VACIO,\n";
		}

		if (operador=="") {
			mensaje=mensaje+"EL CAMPO DE OPERADOR NO DEBE ESTAS VACIO,\n";
		}

		if (costo=="") {
			mensaje=mensaje+"EL CAMPO DE COSTO NO DEBE ESTAS VACIO,\n";
		}
		
		if (precio=="") {
			mensaje=mensaje+"EL CAMPO DE PRECIO NO DEBE ESTAS VACIO,\n";
		}

		if (imagen=="") {
			mensaje=mensaje+"EL CAMPO DE IMAGEN NO DEBE ESTAS VACIO,\n";
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

