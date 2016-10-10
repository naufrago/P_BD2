<?php
	session_start();
	//para validar que existan variables de sesion
	if(!$_SESSION['idusuario']){

		header("location:index.php");
	}
?>