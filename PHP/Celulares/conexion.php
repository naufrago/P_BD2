<?php
$conexion= pg_connect("host=localhost dbname=bdCelulares user=postgres password=unal")
    or die('No se ha podido conectar: ' . pg_last_error());
?>
