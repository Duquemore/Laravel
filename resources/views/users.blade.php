<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>
<body>
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
</body>
</html>