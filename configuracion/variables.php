<?php
session_start();
include("configuracion/config.php");

/* Condicion que sirve para darle saber al programa que si hay una sesion activa se quede */
if (!isset($_SESSION['usuario'])){
    header("Location: index.php");
}

/* Consulta a la base de Datos para traer y meter en variables los datos de un usuario */
$sql = mysqli_query($conexion, "SELECT * FROM users");

if ($sql){
    while($row = $sql -> fetch_array()){

        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $contrasena = $row['contrasena'];

    }
}
?>