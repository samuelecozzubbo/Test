<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>About-us</title>
</head>

<body>
    <div class="container my-5">
        <h1>{{$title}}</h1>
        <h2>Lista colori</h2>
        <ul>
            @if(count($colori)>0)
            @foreach($colori as $colore)
            <li>{{$colore}}</li>
            @endforeach
            @else
            <h3>Non ci sono colori</h3>
            @endif
        </ul>

        <!-- Stampa user -->
        @dump($user)
        <p>Ciao {{$user['name']}} {{$user['surname']}} oggi compi {{$user['age']}} anni</p>
    </div>
</body>

</html>