<main class="contenedor seccion contenido-centrado texto-justificado">
    <h1><?php echo $propiedad->titulo; ?></h1>
    
        <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen?>" alt="imagen destacada">
    

    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad->precio; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad->wc; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono Estacionamiento">
                <p><?php echo $propiedad->estacionamiento; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $propiedad->habitaciones; ?></p>

            </li>

        </ul> <!-- fin iconos-carateristicas -->
        <p><?php echo $propiedad->descripcion; ?></p>

    </div> <!-- fin resumen propiedad -->



</main> <!-- Fin main -->