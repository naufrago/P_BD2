<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	include "bootstrap.php";
?>
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
						<div class="alert alert-danger alert-dismissable">
                                Datos Incorrectos
                        </div>

					<?php
						}

					?>
			<form action="script-inicioSesion.php" method="POST">
				<h2>Usuario<br/></h2>
				<input type="text" name="usuario"></input>
				<br/><br/>
				<h2>Contraseña<br/></h2>
				<input type="password" name="contrasena"></input>
				</br></br>
				<input type="submit" value="Ingresar"></input>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</form>
			   	

	  	      </div>

	  	     <div class="clear"></div>
	      </div>

   		</div>
   </div>
   
   <!------------End Header ------------>
   <!--
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
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
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
							      <li><a href="#">Marca</a>
							      </li>
							      <li><a href="#">Precio</a></li>
							      <li><a href="#">Camara</a></li>
							      <li><a href="#">Procesador</a></li>
							      <label class="checkbox-inline"><input type="checkbox" value="">snapdragor</label>
								  <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
								  <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
							      <li><a href="#">Sistema Operativo</a></li>
							      <label class="checkbox-inline"><input type="checkbox" value="">Android</label>
								  <label class="checkbox-inline"><input type="checkbox" value="">Ios</label>
								  <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
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
	<!--
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Resultados</h3>
	            <div class="section group">
				  <div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			   </div>
			   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			   </div>
			   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href="preview.html"><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href="preview.html"><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			    </div>

		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>-->

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

