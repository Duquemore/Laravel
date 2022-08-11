<?php

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', function(){
  return 'Usuarios';
});

// Route::get('/usuarios/{id}', function($id){
//   return "Mostrando detalle del usuario: {$id}";
// })->where('id', '[0-9]+');

Route::get('/usuarios/{id}', function($id){
  return "Mostrando detalle del usuario: {$id}";
})->where('id', '\d+');

Route::get('/usuarios/nuevo', function(){
  return "Crear Nuevo Usuario";
});

Route::get('/saludo/{name}/{lastname?}', function($name, $lastname = null){
  if($lastname){
    return "Hola {$name} {$lastname}";    
  } else {
    return "Hola {$name}, no tienes apodo";
  }
})->where('name', '\d+');