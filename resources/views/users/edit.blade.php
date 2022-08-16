@extends('Layout')
@section('title',"Crear nuevo usuario")
@section('content')
    <br>
    <br>
    <br>
    <h1>Editar usuario existente</h1>

    <form action="{{ url(route('users')) }}" method="POST">
        @csrf
        <label>
            Nombre 
            <input type="text" name="name" value="{{ old('name', $user->name) }}">
        </label>
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <br>
        <label>
            Email 
            <input type="email" name="email" value="{{ old('email', $user->email) }}">
        </label>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <br>
        <label>
            Contraseña 
            <input type="password" name="password" value="{{ old('password', $user->password) }}">
        </label>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif
        <br>
        <button type="submit">
            Actualizar
        </button>
    </form>
@endsection