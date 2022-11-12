<?php 
session_start();
include("configuracion/config.php");
ini_set('error_reporting', 0);

if (isset($_SESSION['usuario'])){
    header("Location: inicio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Facebook.com</title>
</head>
<body>
    
    <div id="header-izq">
        <img src="img/imgheader.PNG" alt="Facebook">

        <div class="header-izq-text">
            <h4>¡Gracias por Visitarnos!</h4>
            <p>Esperamos verte pronto.</p>
        </div>
    </div>

    <div id="header-der">
        <div class="header-der-center">
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" name="correo" required id="correo" placeholder="Correo Electronico o numero de Telefono">
                </div>

                <div class="input-box">
                    <input type="password" name="contrasena" required id="contrasena" placeholder="Contraseña">
                </div>
   
                <input type="submit" name="ingresar" value="Iniciar Sesion" class="btn">
            </form>

            <?php
            if (!empty($_POST["ingresar"])){
                $correo = $_POST["correo"];
                $contrasena = $_POST["contrasena"];

                $sql = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '$correo' AND contrasena = '$contrasena'");
                $resultado = mysqli_num_rows($sql);

                if (!$resultado == 1){
                    ?><div class="rojo">Los Datos ingresados no Existen</div><?php
                    
                }else{ 
                    $_SESSION['usuario'] = "Usuario";
                    header("Location: inicio.php");
                }

                
            }
            ?>

            <a href="#">¿Olvidaste tu Contraseña?</a>

            <br><br>
            <div class="input-boxline"></div>

            <a href="registrarse.php" class="btn-crear">Crear Cuenta Nueva</a>
        </div>
    </div>

    <div id="footer"><h1>Facebook.com</h1></div>

</body>
</html>