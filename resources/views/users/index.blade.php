@extends('Layout')
@section('title','Usuarios')
@section('content')
    <div>
        <br>
        <br>
        <br>
        <h1>Usuarios</h1>
        <hr>
        <ul>
            @forelse ($users as $user)
                <li>
                    {{$user->name}}, {{$user->email}}
                    <a href="{{ route("users.show", ['user' => $user]) }}">Ver detalles</a>
                    <a href="{{ route("users.edit", ['user' => $user]) }}">Editar</a>
                </li>
            @empty
                <li>No hay usuarios registrados.</li>     
            @endforelse
        </ul>    
    </div>
@endsection

@section('sidebar')
    @parent
@endsection


