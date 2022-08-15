<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', [UserController::class, 'index']);

// Route::get('/usuarios/{id}', function($id){
//   return "Mostrando detalle del usuario: {$id}";
// })->where('id', '[0-9]+');

Route::get('/usuarios/{id}', [UserController::class, 'detail'])->where('id', '\d+');

Route::get('/usuarios/nuevo', [UserController::class, 'new']);

Route::get('/saludo/{name}/{lastname?}', [WelcomeController::class, 'hello'])->where('name', '\d+');