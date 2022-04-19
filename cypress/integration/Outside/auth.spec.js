/// <reference types="cypress"/>

describe('Probando la autenticacion', ()=>{
    it('Prueba la autenticacion en /login', ()=>{
        cy.visit('/login')
        cy.get('[data-cy="heading-login"]').should('exist');
        cy.get('[data-cy="heading-login"]').should('have.text', 'Iniciar Sesion'); 

        cy.get('[data-cy="form-login"]').should('exist');

        //Ambos campos son obligatorios
        cy.get('[data-cy="form-login"]').submit();
        cy.get('[data-cy="alerta-login"]').should('exist');
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.class', 'error');
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.text', 'El email es obligatorio');

        cy.get('[data-cy="alerta-login"]').eq(1).should('have.class', 'error');
        cy.get('[data-cy="alerta-login"]').eq(1).should('have.text', 'El password es obligatorio');
        

        //El usuario exista

        //Verificar el password





    });



});
