<?php
 include("configuracion/variables.php");
?>

<!-- Archivos HTML o Estructura -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontello-codes.css">
    <link rel="stylesheet" href="css/fontello-ie7-codes.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Facebook</title>
</head>
<body>
    <!-- ID PADRE HEADER cabecera donde sale el INPUT foto de perfil y demas-->
    <div id="padre-header">
        <header>
            <div class="header-izq">
                <a href="#"><img src="img/inicio.PNG" alt="Facebook.com"></a>
                <form action="inicio.php" method="post">
                    <input type="text" name="buscar" placeholder="Buscar en Facebook">
                </form>
            </div>

            <div class="header-center">
                <nav>
                    <ul>
                        <li><a href="" class="a-active" ><i class="icon-home"></i></a></li>
                        <li><a href="" ><i class="icon-user-plus"></i></a></li>
                        <li><a href=""><i class="icon-users"></i></a></li>
                        <li><a href=""><i class="icon-pin"></i></a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-der">
                <a href="" class="header-der-a"><i class="icon-th"></i></a>
                <a href="" class="header-der-a"><i class="icon-chat-1"></i></a>
                <a href="" class="header-der-a"><i class="icon-bell-alt"></i></a>

                <div class="header-der-img">
                    <a href="perfil.php"><img src="img/default.png" title="<?php echo ($nombre); ?>" alt="<?php echo ($nombre); ?>"></a>
                </div>
            </div>
        </header>
    </div>

    <!-- Contenido central -->

</body>
</html>