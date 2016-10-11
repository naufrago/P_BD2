<?php
include "conexion.php";

$idusuario=$_GET['idusuario'];

$consulta="UPDATE usuario SET activo=false WHERE idusuario='$idusuario'";

//comprobamos que la consulta fue exitosa
$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

//redirecciono al login con status 2(datos incorrectos
header("Location: listarUsuarios.php?status=3");


?>