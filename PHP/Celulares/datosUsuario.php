<?php
include "conexion.php";

    $consulta="SELECT * FROM usuario WHERE idUsuario='".$_SESSION['idusuario']."'";
    //comprobamos que la consulta fue exitosa
	$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());
	$fila=pg_fetch_assoc($resultado);

	$id_usuario=$fila['idusuario'];
	$nombre=$fila['nombre'];
	$apellido=$fila['apellido'];
	$rol=$fila['rol'];
	$contrasena=$fila['contrasena'];
	$direccion=$fila['direccion'];
	$correo=$fila['correo'];
	$telefono=$fila['telefono'];
?>