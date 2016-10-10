<?php
include "conexion.php";

//capturamos los campos del formularios
$codigocelular=$_POST['codigocelular'];
$marca=$_POST['marca'];
$referencia=$_POST['referencia'];
$cantidad=$_POST['cantidad'];
$procesadorghz=$_POST['procesadorghz'];
$almexternogb=$_POST['almexternogb'];
$alminternogb=$_POST['alminternogb'];
$memoriagb=$_POST['memoriagb'];
$camarampx=$_POST['camarampx'];
$pantallapx=$_POST['pantallapx'];
$sistoperativo=$_POST['sistoperativo'];
$dimensionesm=$_POST['dimensionesm'];
$operador=$_POST['operador'];
$costo=$_POST['costo'];
$precio=$_POST['precio'];
$imagen=pg_escape_bytea(file_get_contents($_FILES['imagen']['tmp_name']));



if(isset($codigocelular)){
$consulta="INSERT INTO celular VALUES ($codigocelular,'$marca','$referencia',$cantidad,$procesadorghz,$almexternogb,$alminternogb,$memoriagb,$camarampx,$pantallapx,'$sistoperativo','$dimensionesm','$operador',$costo,$precio,'{$imagen}','true')";

//comprobamos que la consulta fue exitosa
$resultado= pg_query($consulta) or die('La consulta fallo: ' . pg_last_error());

pg_free_result($resultado);
// Cierro la conexion para evitar errores
pg_close($conexion);


header("Location: listarCelulares.php?status=1");

}
?>