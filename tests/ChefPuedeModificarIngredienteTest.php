<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChefPuedeModificarIngredienteTest extends TestCase
{
    /**
     * Prueba que el mesero si pueda modificar la cantidad de un ingrediente
     *
     * @return void
     */
   public function testChefPuedeIniciarSesion()
    {
        $this->visit('/')
         ->type('adolfo@burrito.com', 'email')
         ->type('Burrito$1234', 'password')
         ->press('Iniciar sesion')
         ->seePageIs('inicioAdministracion/retornarIngredientes');
    }
}
