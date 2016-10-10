<?php
include "conexion.php";

$codigocelular=$_GET['codigocelular'];

$consulta="UPDATE celular SET activo=false WHERE codigocelular='$codigocelular'";

//comprobamos que la consulta fue exitosa
$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

//redirecciono al login con status 2(datos incorrectos
header("Location: listarCelulares.php?status=3");


?>