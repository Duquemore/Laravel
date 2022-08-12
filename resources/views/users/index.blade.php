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
            <li>{{$user}}</li>
            @endforeach
        </ul>    
        @else
        <p>No hay usuarios registrados.</p>
        @endif
        <h1>Neas</h1>
        <hr>
        <ul>
            {{-- @foreach ($neas as $nea)
                <li>{{$nea}}</li>
                <li>{{ $nea }}</li>
            @endforeach --}}
        
            @forelse ($neas as $nea)
            <li>{{$nea}}</li>
            <li>{{ $nea }}</li>
            @empty
            <p>No hay usuarios registrados.</p>
            @endforelse
        </ul>
    </div>
@endsection

@section('sidebar')
@parent
<h2>barrita golosa</h2>
@endsection