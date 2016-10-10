<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--FILAS DINAMICAS-->
     
	<table>
	<thead>
		<tr>
			<td width='25%'><h4>Imagen</h4></td>
		</tr>
	</thead>
	<tbody>
		<?php
     	include "conexion.php";
     	$consulta="SELECT * FROM celular";
     	//comprobamos que la consulta fue exitosa
		$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

     	if(pg_num_rows($resultado)==0){
     ?>
     	<tr>
     		<td colspan="5" align="center">NO SE ENCONTRARON CELULARES</td>
     	</tr>
   
     <?php
   		} 

     	while($fila=pg_fetch_assoc($resultado)){
			if($fila['activo']){
     ?>
		<tr>
			<td>
				<img src="imagenes.php?codigocelular=<?php echo $fila['codigocelular']; ?>" width='400'>
			</td>
		</tr>
	<?php
		}}
	?>
	</tbody>
</table>
</body>
</html>
