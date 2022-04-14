<main class="contenedor seccion ">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img src="build/img/destacada3.jpg" alt="">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>

        <form class="formulario" action="/contacto" method="POST">

            <fieldset>
                <legend>Informacio Personal</legend>

                <label for="nombre">Nombre</label>

                <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" >
                <!-- Ewe no se que va aqui pero combia el campo -->
                <label for="email">Email</label>
                <input type="email" placeholder="email" id="email" name="contacto[email]" require>


                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono" name="contacto[telefono]" >

                <label for="mensaje">Mensaje</label>
                <textarea name="contacto[mensaje]" id="mensaje" ></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad </legend>

                <label for="opciones">Vende o compra</label>
                <select  id="opciones" name="contacto[opciones]" >
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">compra</option>
                    <option value="vende">vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Presupuesto" id="presupuesto" name="contacto[precio]" >

            </fieldset>

            <fieldset>
                <legend>Informacio sobre la propiedad</legend>
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input  type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" >

                    <label for="contactar-email">Email</label>
                    <input  type="radio" value="email" id="contactar-email" name="contacto[contacto]" >
                </div>

                <p>Si eligio telefono, elija la fecha y hora</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="contacto[fecha]">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">

            </fieldset>


            <input type="submit" value="enviar" class="boton-verde">
        </form>

    </main> <!-- Fin main -->