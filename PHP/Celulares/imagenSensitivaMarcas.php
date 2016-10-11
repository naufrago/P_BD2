<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include "bootstrap.php"; ?>

<!DOCTYPE HTML>
<head>
<title>UpCellphone</title>
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
					
						<a href="index.php"><img src="images/logo1.png" width="75px" alt="" /></a>
					</div>
						<div class="header_top_right">
							  <div class="search_box">
							  	<span>Buscar</span>
					     		<form>
					     			<input type="text" value=""><input type="submit" value="">
					     		</form>
					     		<div class="clear"></div>
					     	</div>
					</div>
			     <div class="clear"></div>
  		    </div>     

  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.php">Inicio</a>
						</li>
						<!--<li  class="test">
						</li>-->

						<!--
						<li>
							<a href="#">ventas</a>

						</li>
						-->

						
						<li>
							<a href="inicioSesion.php">Administrador</a>
						</li>
						
						<li>
							<a  href="contacto.php">Contacto</a>
						</li>

					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
  		     <div class="header_bottom">
			   <div class="slider-text">
				 <?php							
						//capturo el status para haci lanzar el error
						if(isset($_GET['status']) and $_GET['status']==2)
						{
					?>
						<div class="alert alert-success alert-dismissable">
                                Sesion Cerrada Exitosamente
                        </div>
					   <br/><br/>

					<?php
						}

					?>


			   	<h2>Venta de celulares <br/>Manejamos la mas alta Gama</h2>
			   	<p>Bienvenido a UpCellphone<br/> Si eres amante de la tecnologia movil estas en el lugar indicado</p>
			   	<a >Bienvenido</a>
	  	      </div>
	  	      <div class="slider-img">
	  	      	<img src="images/imagenInicio1.png" alt=""  />
	  	      </div>
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Ultimos Productos</h3>
		          	</div>

		          	
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
	      				<?php
				include "conexion.php";
    	    	$consulta="SELECT * FROM celular";
    	    	$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());						
				while($fila=pg_fetch_assoc($resultado) )
				{
					if($fila['activo']=='t'){
    	    	?>
			                <div class="ocarousel_window">
			                   <a  href="preview.php?codigocelular=<?php echo $fila['codigocelular']; ?>" title="img1"> <img src="imagenes.php?codigocelular=<?php echo $fila['codigocelular']; ?>" alt="" width="80" /><p><?php echo $fila['referencia']; ?></p></a>
			                 </div>
			     <?php
			 		}
			     		}
				     	// libero los resultados para futuras consultas
						pg_free_result($resultado);
						// Cierro la conexion para evitar errores
						pg_close($conexion);
			     ?>
			                
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>

    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Buscar por categorias</h3>
							      <li><a href="imagenSensitivaMarcas.php">Marca</a>
							      </li>
							      <li><a href="imagenSensitivaSistemas.php">Sistema Operativo</a></li>
						  	 </ul>
						</div>	
						<!--
						<div class="buters-guide">
						<h3>Buyers Guide</h3>
						<p><span>We want you to be happy with your purchase.</span></p>	
						<p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
					  </div>	
					  <div class="add-banner">
					  	<img src="images/camera.png" alt="" />
					  	<div class="banner-desc">
					  		<h4>Electronics</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>
					    <div class="add-banner add-banner2">
					  	<img src="images/imagenInicio.jpg" alt="" height="344px" />
					  	<div class="banner-desc">
					  		<h4>Computers</h4>
					  	    <a href="#">More Info</a>
					  	</div>
					  	<div class="clear"></div>
					  </div>-->
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Resultados</h3>
    	    		<CENTER><IMG src="images/Imagen Sensitiva Marcas Celulares.jpg" USEMAP="mapaMarcas" /></CENTER>

    	    		<MAP NAME="mapaMarcas">
					  <AREA SHAPE=rect COORDS="0,0,275,104" 
					      HREF="script-filtroMarca.php?marca='Apple'" >

					  <AREA SHAPE=rect COORDS="276,0,551,104" 
					      HREF="script-filtroMarca.php?marca='Asus'" >

				      <AREA SHAPE=rect COORDS="552,0,827,104" 
					      HREF="script-filtroMarca.php?marca='HTC'" >

					  <AREA SHAPE=rect COORDS="0,105,275,209" 
					      HREF="script-filtroMarca.php?marca='Huawei'" >

					  <AREA SHAPE=rect COORDS="276,105,551,209" 
					      HREF="script-filtroMarca.php?marca='LG'" >

					   <AREA SHAPE=rect COORDS="552,105,827,209" 
					      HREF="script-filtroMarca.php?marca='Motorola'" >

					  <AREA SHAPE=rect COORDS="0,210,275,315" 
					      HREF="script-filtroMarca.php?marca='OnePlus'" >

					  <AREA SHAPE=rect COORDS="276,210,551,315" 
					      HREF="script-filtroMarca.php?marca='Samsung'" >

					  <AREA SHAPE=rect COORDS="552,210,827,315" 
					      HREF="script-filtroMarca.php?marca='Sony'" >
					</MAP>
  
				</div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
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

