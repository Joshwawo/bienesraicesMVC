<main class="contenedor seccion ">
    <h2  data-cy="index-nosotros" >Mas Sobre Nosotros</h2>
    <?php include 'iconos.php' ?>

</main> <!-- Fin main -->

<section class="seccion contenedor">
    <h2>Casa Y Departamentos en Venta</h2>

    <?php 
    
    include 'listado.php';
    ?>
   

    <div class="alinear-derecha">
        <a href="propiedades" class="boton-verde" data-cy="todas-propiedades">Ver Todas</a>
    </div>

</section>


<section data-cy="imagen-contacto" class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>

    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto" class="boton-amarillo">Contactanos</a>

</section>

<div class="contenedor seccion seccion-inferior">

    <section data-cy="blog" class="blog">

        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">

            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="">
                </picture>
            </div>

            <div class="texto-entrada">

                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa </h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aut, illo harum ducimus
                        autem corporis nihil commodi expedita quaerat, officia doloremque unde.
                    </p>
                </a>

            </div>

        </article>

        <article class="entrada-blog">

            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="entrada-blog">
                </picture>
            </div>

            <div class="texto-entrada">

                <a href="entrada.php">
                    <h4>Guia de decoracion del hogar </h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aut, illo harum ducimus
                        autem corporis nihil commodi expedita quaerat, officia doloremque unde.
                    </p>
                </a>

            </div>

        </article>

    </section>

    <section data-cy="testimoniales" class="testimoniales">

        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae harum sequi dolorem blanditiis vel
                consequatur amet molestiae ab fugit omnis!

            </blockquote>
            <p>-Jorge Morales</p>

        </div>

    </section>

</div>