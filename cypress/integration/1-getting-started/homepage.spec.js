/// <references types="cypress"/>

describe('Carga la Pagina Principal', () =>{
        it('prueba el header de la pagina principal', () =>{
            cy.visit('http://localhost:3000/');

           
            cy.get(['[data-cy="heading-sitio"]']);

        });
});