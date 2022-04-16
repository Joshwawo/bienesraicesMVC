<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>

    <?php foreach ($errores as $error) : ?>

        <div class="alerta error">

            <?php echo $error; ?>

        </div>

    <?php endforeach; ?>

    <!-- Si no colocamos el action a post lo va a enviar al $_SERVER['REQUEST_METHOD'] -->
    <form method="POST" class="formulario" action="/login">

        <fieldset>

            <legend>Email y Contraseña</legend>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Tu email" id="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu contraseña" id="password">
        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

    </form>

</main> <!-- Fin main -->