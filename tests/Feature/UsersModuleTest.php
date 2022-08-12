<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    function test_usuarios_200()
    {
        $response = $this->get('/usuarios')
                         ->assertStatus(200)
                         ->assertSee('Joel')
                         ->assertSee('neita');
    }
    function test_no_hay_usuarios_200()
    {
        $response = $this->get('/usuarios?empty')
                         ->assertStatus(200)
                         ->assertSee('No hay usuarios registrados.');
    }
    function test_usuarios_5_200()
    {
        $response = $this->get('/usuarios/5')
                         ->assertStatus(200);
    }
    function test_usuarios_nuevo_200()
    {
        $response = $this->get('/usuarios/nuevo')
                         ->assertStatus(200);
    }
}
