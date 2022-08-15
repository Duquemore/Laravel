<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', [UserController::class, 'index'])->name('users');

// Route::get('/usuarios/{id}', function($id){
//   return "Mostrando detalle del usuario: {$id}";
// })->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', [UserController::class, 'new'])->name('users.create');

Route::get('/usuarios/{user}', [UserController::class, 'detail'])->where('user', '\d+')->name('users.show');

Route::get('/saludo/{name}/{lastname?}', [WelcomeController::class, 'hello'])->where('name', '\d+');