/// <reference types="cypress"/>

describe('Prueba del Formulario de contacto', ()=>{

    it('Prueba la pagina de contacto y la de Email', ()=>{

        cy.visit('/contacto');
        cy.get('[data-cy="pagina-contacto"]').should('exist');
        cy.get('[data-cy="pagina-contacto"]').invoke('text').should('equal', 'Contacto');
        cy.get('[data-cy="pagina-contacto"]').invoke('text').should('not.equal', 'Formulario de contacto');

        //Form contacto
        cy.get('[data-cy="form-contacto"]').should('exist');
        cy.get('[data-cy="form-contacto"]').invoke('text').should('equal', 'Llene el Formulario de Contacto');
        cy.get('[data-cy="form-contacto"]').invoke('text').should('not.equal', 'Formulario de Contacto');
        cy.get('[data-cy="form-de-contacto"]').should('exist');
    });

    it('Prueba con los formularios', () =>{
        cy.get('[data-cy="input-nombre"]').type('Jorge');
        cy.get('[data-cy="input-mensaje"]').type('Hola buenas quiero mas informes de la inmobiliaria');
        cy.get('[data-cy="input-opciones"]').select('compra');
        cy.get('[data-cy="input-presupuesto"]').type('122000');

        cy.get('[data-cy="forma-contacto"]').eq(1).check();
        // cy.wait(2000);
        cy.get('[data-cy="forma-contacto"]').eq(0).check();

        cy.get('[data-cy="input-telefono"]').type('3254764567');
        cy.get('[data-cy="input-fecha"]').type('2022-04-18');
        cy.get('[data-cy="input-hora"]').type('09:39');
        cy.get('[data-cy="form-de-contacto"]').submit();

        cy.get('[data-cy="alerta-envio-formulario"]').should('exist');
        cy.get('[data-cy="alerta-envio-formulario"]').invoke('text').should('equal', 'Mensaje Enviado Correctamente');
        cy.get('[data-cy="alerta-envio-formulario"]').should('have.class', 'alerta').and('have.class', 'exito').and('not.have.class', 'esito');


    });

});