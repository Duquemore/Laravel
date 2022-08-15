@extends('Layout')
@section('title',"Crear nuevo usuario")
@section('content')
    <br>
    <br>
    <br>
    <h1>Crear nuevo usuario</h1>
    <form action="nuevo" method="POST">
        @csrf
        <h2>Nombre 
            <input type="text">
        </h2>
        <h2>Contraseña 
            <input type="password">
        </h2>
        <h2>Correo 
            <input type="email">
        </h2>
        <h2>Profesion 
            <input type="text">
        </h2>
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection