<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;

if(!isset($caca)){
    $caca = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <!-- <link rel="stylesheet" href="build/css/app.css"> -->
    <link rel="stylesheet" href="../build/css/app.css">


</head>

<body>

    <header class="header <?php echo $caca  ? 'inicio' : ''; ?>">

        <div class="contenedor contenido-header">

            <div class="barra">

                <a href="/bienesraices/index.php">
                    <img src="/build/img/logo.svg" alt="Logotipo de Binenes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contactanos</a>
                        <!-- Ejecuta el codigo con los : -->
                        <?php if ($auth) :  ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>


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
    <?php echo $contenido; ?>

    <footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="/bienesraices/nosotros.php">Nosotros</a>
            <a href="/bienesraices/anuncios.php">Anuncios</a>
            <a href="/bienesraices/blog.php">Blog</a>
            <a href="/bienesraices/contacto.php">Contactanos</a>
        </nav>

    </div>
    
    <p class="copyright"> Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>

</footer> <!-- Fin del Footer -->
<script src="../build/js/bundle.min.js"></script>
</body>

</html>