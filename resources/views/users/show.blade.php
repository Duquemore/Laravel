@extends('Layout')
@section('title',"Detalle usuario ${name}")
@section('content')
    <br>
    <br>
    <br>
    <h1>Usuario {{ $name }}</h1>
    <h2>Correo {{ $email }}</h2>
    <h2>Profesion {{ $profession }}</h2>
    <h2>Es admin {{ $is_admin }}</h2>
@endsection