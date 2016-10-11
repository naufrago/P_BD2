<?php
	include "conexion.php";
	include "controlSesion.php";
	include "datosUsuario.php";
	include "bootstrap.php"; 

	$codigo=$_GET['codigo'];

	$consulta="SELECT * FROM celular WHERE codigocelular=$codigo ";

	$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

	if($fila=pg_fetch_assoc($resultado)){
?>
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
						  	<center><h3>Celular con Codigo: <?php  echo $fila['codigocelular']; ?></h3></center>
							<center><img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" style="width: 300px; height: 310px;" src="imagenes.php?codigocelular=<?php echo $fila['codigocelular']; ?>" data-holder-rendered="true"/></center>
								<br>
						<table class="table table-striped table-bordered" id="tablalist">
					              <thead>
					              <!--TITULOS DE LA TABLA-->
					              <tr>
					                <th align="center"><h4>Marca</h4></th>
					                <th align="center"><h4>Referencia</h4></th>
					                <th align="center"><h4>Cantidad</h4></th>
					                <th align="center"><h4>Procesadorghz</h4></th>
					                <th align="center"><h4>Almexternogb</h4></th>
					                <th align="center"><h4>Alminternogb</h4></th>
					                <th align="center"><h4>Memoriagb</h4></th>
					                <th align="center"><h4>Camarampx</h4></th>
					                <th align="center"><h4>Pantallapx</h4></th>
					                <th align="center"><h4>Sistoperativo</h4></th>
					                <th align="center"><h4>Dimensionesm</h4></th>
					                <th align="center"><h4>Operador</h4></th>
					                <th align="center"><h4>Costo</h4></th>
					                <th align="center"><h4>Precio</h4></th>
					                <th align="center"><h4>OPCIONES</h4></th>
					              </tr>
					              </thead>
					              <tbody>

					              <tr>
					                <td align="center"> <?php echo $fila['marca'];?> </td>
					                <td align="center"> <?php echo $fila['referencia'];?> </td>
					                <td align="center"> <?php echo $fila['cantidad'];?> </td>
					                <td align="center"> <?php echo $fila['procesadorghz'];?> </td>
					                <td align="center"> <?php echo $fila['almexternogb'];?> </td>
					                <td align="center"> <?php echo $fila['alminternogb'];?> </td>
					                <td align="center"> <?php echo $fila['memoriagb'];?> </td>
					                <td align="center"> <?php echo $fila['camarampx'];?> </td>
					                <td align="center"> <?php echo $fila['pantallapx'];?> </td>
					                <td align="center"> <?php echo $fila['sistoperativo'];?> </td>
					                <td align="center"> <?php echo $fila['dimensionesm'];?> </td>
									<td align="center"> <?php echo $fila['operador'];?> </td>
									<td align="center"> <?php echo $fila['costo'];?> </td>
									<td align="center"> <?php echo $fila['precio'];?> </td>
					                <td align="center">
					                <a class="btn btn-sm btn-success" href="editarCelular.php?codigocelular=<?php echo $fila['codigocelular']; ?>" >Editar</a>   
					                <a class="btn btn-sm btn-danger" href="eliminarCelular.php?codigocelular=<?php echo $fila['codigocelular']; ?>">Borrar</a>
					                </td>

					              </tr>

					              </tbody>
			            </table>

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
<?php
	// libero los resultados para futuras consultas
						pg_free_result($resultado);
						// Cierro la conexion para evitar errores
						pg_close($conexion);
	}else{
		header("Location:listarCelulares.php?status=4");
	}
	
?>