<main class="contenedor seccion ">
        <h1 data-cy="pagina-contacto" >Contacto</h1>

        <?php 

            if($mensaje){ ?>
               <p data-cy="alerta-envio-formulario" class="alerta exito"><?php echo $mensaje; ?></p>;
            

       <?php } ?>


        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img src="build/img/destacada3.jpg" alt="">
        </picture>

        <h2 data-cy="form-contacto" >Llene el Formulario de Contacto</h2>

        <form data-cy="form-de-contacto" class="formulario" action="/contacto" method="POST">

            <fieldset>
                <legend>Informacio Personal</legend>

                <label for="nombre">Nombre</label>

                <input data-cy="input-nombre" type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" >
                <label for="mensaje">Mensaje</label>
                <textarea data-cy="input-mensaje" name="contacto[mensaje]" id="mensaje" ></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad </legend>

                <label for="opciones">Vende o compra</label>
                <select data-cy="input-opciones" id="opciones" name="contacto[opciones]" >
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">compra</option>
                    <option value="vende">vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input data-cy="input-presupuesto" type="number" placeholder="Tu Presupuesto" id="presupuesto" name="contacto[precio]" >

            </fieldset>

            <fieldset>
                <legend>Informacio sobre la propiedad</legend>
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input data-cy="forma-contacto" name="contacto[contacto]"  type="radio" value="telefono" id="contactar-telefono"  >

                    <label for="contactar-email">Email</label>
                    <input data-cy="forma-contacto" name="contacto[contacto]" type="radio" value="email" id="contactar-email"  >
                </div>

                <div id="contacto"></div>

                

            </fieldset>


            <input type="submit" value="enviar" class="boton-verde">
        </form>

    </main> <!-- Fin main -->