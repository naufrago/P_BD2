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
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        

    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Resultados</h3>
    	    	<?php							
						
						if(isset($_GET['status']) and $_GET['status']==1)
						{
					?>
						<div class="alert alert-success alert-dismissable">
                                Sesion Iniciada Exitosamente
                        </div>
					   <br/><br/>

					<?php
						}

					?>

    	    	<?php
				include "conexion.php";
    	    	$consulta="SELECT * FROM celular";
    	    	$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

				while($fila=pg_fetch_assoc($resultado))
				{
					if($fila['activo']=='t'){
    	    	?>
				  <div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.php?codigocelular=<?php echo $fila['codigocelular']; ?>"><?php echo $fila['referencia'];?> </a></h4>
					  <a href="preview.php?codigocelular=<?php echo $fila['codigocelular']; ?>"><img src="imagenes.php?codigocelular=<?php echo $fila['codigocelular']; ?>"></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $fila['precio'];?> </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php?codigocelular=<?php echo $fila['codigocelular']; ?>">Mas Informacion</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<?php }}?>

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

