@extends('Layout')
@section('title',"Crear nuevo usuario")
@section('content')
    <br>
    <br>
    <br>
    <h1>Crear nuevo usuario</h1>

    {{-- errors general way 
    @if($errors->any())
    @foreach ( $errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
    @endif --}}

    <form action="{{ url('/usuarios') }}" method="POST">
        @csrf
        <label>
            Nombre 
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <br>
        <label>
            Email 
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif
        <br>
        <label>
            Contraseña 
            <input type="password" name="password">
        </label>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif
        <br>
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection