<?php
include "conexion.php";

//capturamos los campos del formularios
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

//validacion si existe algun campo
if(isset($usuario)){

	$consulta="SELECT * FROM usuario WHERE nombre='$usuario' AND contrasena='$contrasena' ";

	//comprobamos que la consulta fue exitosa
	$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

	//guardo los resultados en un array asociativo
	if($fila=pg_fetch_assoc($resultado)){
		//inicio una sesion privada para el usuario logeado
		session_start();
		$_SESSION['idusuario']=$fila['idusuario'];
		$_SESSION['nombre']=$fila['nombre'];

		//redirecciono a la pagina principal pero  con status 1(exito de sesion)
		header("Location:menuUsuario.php?status=1");
	}else{
		
		// libero los resultados para futuras consultas
		pg_free_result($resultado);
		// Cierro la conexion para evitar errores
		pg_close($conexion);

		//redirecciono al login con status 2(datos incorrectos
		header("Location: inicioSesion.php?status=2");
	}

}
	
		// libero los resultados para futuras consultas
		pg_free_result($resultado);
		// Cierro la conexion para evitar errores
		pg_close($conexion);


?>