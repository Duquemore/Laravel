<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersModuleTest extends TestCase{
    use RefreshDatabase;
  
    function test_usuarios_200(){
        User::factory()->create([
            'name' => 'Joel',
        ]);
        
        User::factory()->create([
            'name' => 'neita',
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Joel')
            ->assertSee('neita');
    }

    function test_no_hay_usuarios_200(){
        User::all()->each->delete(); 
        $this->get('/usuarios')
            ->assertSee('No hay usuarios registrados.');
    }

    function test_usuarios_detail_200(){
        $user = User::factory(User::class)->create([
            'name' => 'Debaran',
        ]);

        $this->get("/usuarios/{$user->id}")
            ->assertSee('Debaran');
    }

    function test_usuarios_detail_404(){
        $this->get('usuarios/d')
            ->assertStatus(404)
            ->assertSee('404');

    }

    // function test_usuarios_nuevo_200(){
    //     $this->get('/usuarios/nuevo')
    //         ->assertStatus(200);
    // }

    function test_crear_usuario_nuevo_200(){
        $this->post('/usuarios', [
            'name' => 'Debaran',
            'email' => 'debaran@gmail.com',
            'password' => '123456',
        ])->assertRedirect(route('users'));
            
        $this->assertCredentials([
            'name' => 'Debaran',
            'email' => 'debaran@gmail.com',
            'password' => '123456',
        ]);
    }
    
    function test_nombre_requerido_form_usr_nuevo(){
        $this->from('/usuarios/crear')
            ->post('/usuarios', [
                'user' => '',
                'email' => 'debaran@gmail.com',
                'password' => '123456',
        ])->assertRedirect(route('users.create'))
          ->assertSessionHasErrors(['name' => 'El campo nombre es obligatorio']);

        $this->assertEquals(0, User::count());

        // Another way for assertEquals
        // $this->assertDatabaseMissing('users', [
        //     'email' => 'debaran@gmail.com',
        // ]);
    }

    function test_email_requerido_form_usr_nuevo(){
        $this->from('/usuarios/crear')
            ->post('/usuarios', [
                'user' => 'debaran',
                'email' => '',
                'password' => '123456',
        ])->assertRedirect(route('users.create'))
          ->assertSessionHasErrors(['email' => 'El campo email es obligatorio']);

        $this->assertEquals(0, User::count());
    }

    function test_email_debe_ser_valido(){
        $this->from('/usuarios/crear')
            ->post('/usuarios', [
                'user' => 'debaran',
                'email' => 'correo-no-valido',
                'password' => '123456',
        ])->assertRedirect(route('users.create'))
          ->assertSessionHasErrors(['email']);
       
        $this->assertEquals(0, User::count());
    }

    function test_email_debe_ser_unico(){
        User::factory()->create([
            'email' => 'debaran@gmail.com',
        ]);

        $this->from('/usuarios/crear')
            ->post('/usuarios', [
                'user' => 'debaran',
                'email' => 'debaran@gmail.com',
                'password' => '123456',
        ])->assertRedirect(route('users.create'))
          ->assertSessionHasErrors(['email']);

        $this->assertEquals(1, User::count());
    }

    function test_password_requerido_form_usr_nuevo(){
        $this->from('/usuarios/crear')
            ->post('/usuarios', [
                'user' => 'debaran',
                'email' => 'debaran@gmail.com',
                'password' => '',
        ])->assertRedirect(route('users.create'))
          ->assertSessionHasErrors(['password' => 'El campo password es obligatorio']);

        $this->assertEquals(0, User::count());
    }

    function test_editar_usuario_200(){
        $user = User::factory()->create();
        $this->get("usuarios/{$user->id}/editar")
             ->assertStatus(200)
             ->assertViewIs('users.edit')
             ->assertSee('Editar usuario existente')
             ->assertViewHas('user', $user);

            // Another way to compare if assertViewHas fails
            //  ->assertViewHas('user', function($viewUser) use ($user){
            //     return $viewUser->id == $user->id;
            //  });
    }
}
