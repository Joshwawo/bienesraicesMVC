document.addEventListener('DOMContentLoaded', function () {

    eventListeners();
    // darkMode();
});

function darkMode() {
    const prefiereDarkMode =window.matchMedia('(prefers-color-scheme:dark)');
    // console.log(prefiereDarkMode.matches); 

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');

    }else{
        document.body.classList.remove('dark-mode')
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
    
        }else{
            document.body.classList.remove('dark-mode')
        }

    })



    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click',function(){  
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

function mostrarMetodoContacto(){
    console.log('Seleccionando...');
}
