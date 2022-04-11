<?php



if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <!-- <link rel="stylesheet" href="build/css/app.css"> -->
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">


</head>

<body>

    <header class="header <?php echo $caca  ? 'inicio' : ''; ?>">

        <div class="contenedor contenido-header">

            <div class="barra">

                <a href="/bienesraices/index.php">
                    <img src="/bienesraices/build/img/logo.svg" alt="Logotipo de Binenes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="/bienesraices/nosotros.php">Nosotros</a>
                        <a href="/bienesraices/anuncios.php">Anuncios</a>
                        <a href="/bienesraices/blog.php">Blog</a>
                        <a href="/bienesraices/contacto.php">Contactanos</a>
                        <!-- Ejecuta el codigo con los : -->
                        <?php if ($auth) :  ?>
                            <a href="/bienesraices/cerrar-sesion.php">Cerrar Sesion</a>


                        <?php endif; ?>
                    </nav>
                </div>

            </div>

            <?php
            if ($caca) {
                echo '<h1>Venta de casa y Departamentos de lujo </h1>';
            }
            ?>
        </div>


    </header>