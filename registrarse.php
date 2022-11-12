<?php
    session_start();
    include("configuracion/config.php");
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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/registrar.css">
    <title>Registrar</title>
</head>
<body>

<div id="contain"> 
    <div id="form-center">
        <form action="registrarse.php" method="POST">

            <div class="form-title">
                <a href="index.php">Salir</a>
                <h2>Registrate</h2>
                <p>Es Rapido y Facil</p><br>
                <hr><br>
            </div>

            <div class="form-block-flex">
                <div class="form-blockizq">
                    <input type="text" required name="nombre" placeholder="Nombre">
                </div>

                <div class="form-blockder">
                    <input type="text" required name="apellido" placeholder="Apellido">
                </div>
            </div>

            <div class="form-block">
                <input type="email" required name="correo" placeholder="Correo Electronico o Numero de Telefono">
            </div>

            <div class="form-block">
                <input type="password" required name="contrasena" placeholder="contraseña" >
            </div>
            <br>
            <hr>
            <h5>------------Sexo</h5><br>
            <div class="form-block-flex">
                <div form-sexo>
                    <input type="checkbox" name="hombre" ><span>Hombre</span>
                </div>
                <div form-sexo>
                    <input type="checkbox" name="mujer" ><span>Mujer</span>
                </div>
                <div form-sexo>
                    <input type="checkbox" name="otro" ><span>Otro</span>
                </div>
            </div><br><br>
            <hr><br>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Nemo labore praesentium magnam amet enim iusto commodi 
                 earum quis! Deserunt est natus consequuntur assumenda
                  eos exercitationem accusantium ullam recusandae quis. Accusantium.</p>
            <br>

            <input type="submit" name = "registrar" value="Registrar" id="submit-btn">
        </form>

        <?php
        
            if (!empty($_POST['registrar'])){

                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];

                $sqlinsertar = mysqli_query($conexion, "INSERT INTO users(nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')");

                if ($sqlinsertar){
                    echo '<br><div class="verde">bienvenido</div>';
                    header("Refresh: 2; index.php");
                }else{
                    echo '<div class="rojo">a ocurrido un error</div>';
                }


            }
        
        ?>

    </div>
</div>

</body>
</html>