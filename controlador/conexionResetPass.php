<?php

$conexion = new mysqli('localhost','root','','db_siut');
if($conexion->connect_error){
    die('No se pudo conectar al servidor');
}

?>