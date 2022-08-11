<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    function test_usuarios_200()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
    function test_usuarios_5_200()
    {
        $response = $this->get('/usuarios/5');

        $response->assertStatus(200);
    }
    function test_usuarios_nuevo_200()
    {
        $response = $this->get('/usuarios/nuevo');

        $response->assertStatus(200);
    }
}
