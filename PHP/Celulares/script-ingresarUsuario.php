<?php
include "conexion.php";

//capturamos los campos del formularios
$idusuario=$_POST['idUsuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contrasena=$_POST['contrasena'];
$rol=$_POST['rol'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

echo $rol;

if(isset($idusuario)){
$consulta="INSERT INTO usuario VALUES ($idusuario,'$contrasena',$rol,'$nombre','$apellido','$direccion','$telefono','$correo',true)";

//comprobamos que la consulta fue exitosa
$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

pg_free_result($resultado);
// Cierro la conexion para evitar errores
pg_close($conexion);


header("Location: listarUsuarios.php?status=1");

}
?>