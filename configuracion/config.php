<?php

$server = "localhost";
$user   = "root";
$contrasena = "";
$bd = "facebook";

$conexion = new mysqli($server, $user, $contrasena, $bd);

if ($conexion -> connect_errno){
    die ("la Conexion a fallado" . $conexion -> connect_errno);
}

?>