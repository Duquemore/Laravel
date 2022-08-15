@extends('Layout')
@section('title',"Crear nuevo usuario")
@section('content')
    <br>
    <br>
    <br>
    <h1>Crear nuevo usuario</h1>
    <form action="{{ url('/usuarios') }}" method="POST">
        @csrf
        <label>Nombre 
            <input type="text" name="name">
        </label>
        <br>
        <label>Email 
            <input type="email" name="email">
        </label>
        <br>
        <label>Contraseña 
            <input type="password" name="password">
        </label>
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection