<?php
include "conexion.php";


		$codigocelular=$_GET['codigocelular'];
		$consulta="SELECT imagen FROM celular WHERE codigocelular=$codigocelular";
		$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

		while ($fila=pg_fetch_assoc($resultado)) 
		{
			header("Content-type: image/jpeg");
			$imagen=pg_unescape_bytea($fila['imagen']);
			echo $imagen;
		}

		// libero los resultados para futuras consultas
		pg_free_result($resultado);
		// Cierro la conexion para evitar errores
		pg_close($conexion);


?>

