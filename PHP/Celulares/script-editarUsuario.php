<?php
include "conexion.php";

//capturamos los campos del formularios
$idUsuario=$_POST['idUsuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contrasena=$_POST['contrasena'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

if(isset($idUsuario)){
$consulta="UPDATE usuario SET nombre='$nombre',apellido='$apellido',contrasena='$contrasena',direccion='$direccion',correo='$correo',telefono='$telefono' WHERE idusuario='$idUsuario' ";

//comprobamos que la consulta fue exitosa
$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

pg_free_result($resultado);
// Cierro la conexion para evitar errores
pg_close($conexion);


header("Location: perfilUsuario.php?status=1");

}
?>

