<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    public function test_users_with_lastname()
    {
        $response = $this->get('/saludo/2/d');

        $response->assertStatus(200);
    }
    public function test_users_without_lastname()
    {
        $response = $this->get('/saludo/2');

        $response->assertStatus(200);
    }
}
