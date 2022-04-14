document.addEventListener('DOMContentLoaded', function () {

    eventListeners();
    // darkMode();
});

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');
    // console.log(prefiereDarkMode.matches); 

    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');

    } else {
        document.body.classList.remove('dark-mode')
    }

    prefiereDarkMode.addEventListener('change', function () {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');

        } else {
            document.body.classList.remove('dark-mode')
        }

    })



    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    })
}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodoContacto));


};

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    //?Manera mas limpia de hacerlo- pero recomendada cuando sea un poco mas avanzado en JS navegacion.classList.toggle('mostrar');
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar')
    }

};

function mostrarMetodoContacto(evento) {
    const contactoDiv = document.querySelector('#contacto');
    // contactoDiv.textContent = 'Diste Click';

    if (evento.target.value == 'telefono') {
        contactoDiv.innerHTML = `
        <label for="contactar-telefono">Numero de Telefono</label>
        <input type="tel" placeholder="Tu telefono" id="telefono" name="contacto[telefono]" >

        <p>Elija la fecha y hora para la llamada </p>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="contacto[fecha]">

        <label for="hora">Hora:</label>
        <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">


        `;
    } else {
        contactoDiv.innerHTML = `
        <label for="contactar-email">Email</label>
        <input type="email" placeholder="Email" id="email" name="contacto[email]" >          
        
        `;
    }

}
