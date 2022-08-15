@extends('Layout')
@section('title',"Detalle usuario")
@section('content')
    <br>
    <br>
    <br>
    <h1>Usuario {{ $user->name }}</h1>
    <h2>Correo {{ $user->email }}</h2>
        <h2>Profesion {{ $user->profession->id }}</h2>
    @if ($user->is_admin != null)
        <h2>Es admin</h2>
    @endif
    
    {{--another ways--}}
    {{-- <a href="{{ url()->previous(); }}"> --}}
    {{-- <a href="{{ url("/usuarios") }}"> --}}
    <a href="{{ route("users") }}">
        <button>
            Volver
        </button>
    </a>
@endsection