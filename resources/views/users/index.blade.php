@extends('Layout')
@section('title','Usuarios')
@section('content')
    <div>
        <br>
        <br>
        <br>
        <h1>Usuarios</h1>
        <hr>
        @if (! empty($users))
        <ul>
            @foreach ($users as $user)
            <li>{{$user->id}} {{$user->name}} {{$user->email}}</li>
            @endforeach
        </ul>    
        @else
        <p>No hay usuarios registrados.</p>
        @endif
    </div>
@endsection

@section('sidebar')
{{-- @parent
<h2>barrita golosa</h2> --}}
@endsection