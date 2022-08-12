@extends('Layout')
@section('title',"Usuario ${id}")
@section('content')
    <br>
    <br>
    <br>
    <h1>Usuario {{ $id }}</h1>
    Mostrando detalle del usuario {{ $id }}
@endsection