@php
//qui posso scrivere codice php ma è meglio evitare perchè tutta la logica andra spostata sul controller
$testo= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptas, corrupti quasi rem debitis aspernatur sapiente rerum laborum enim ipsa, odio nobis omnis saepe suscipit ad in deserunt harum ducimus.';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Primo Laravel</title>
</head>

<body>
    <div class="container my-5">
        <h2>Primo laravel</h2>
        <h1>{{$title}}</h1>
        <h2>{{$subtitle}}</h2>
        @dump($title,$subtitle)
        @dump($colori)
        <p>Ciao {{$name}} {{$surname}}</p>
        {{--Commento blade--}}

        @if($stampa_colori)
        <h3>Elenco colori:</h3>
        <!-- loop iteration conta le iterazioni e da il numero -->
        <!-- loop first accede al primo elemento del loop legge il valore first e se true esegue quello che dico-->
        <ul>
            @foreach($colori as $colore)
            @dump($loop)
            <!-- Se il primo elemento del loop aggiungo primo colore: -->
            @if($loop->first)
            <li>{{$loop->iteration}} Primo colore: {{$colore}}</li>
            @elseif($loop->last)
            <li>{{$loop->iteration}} Ultimo colore: {{$colore}}</li>
            @else
            <li>{{$loop->iteration}} {{$colore}}</li>
            @endif

            @endforeach
        </ul>
        @else
        <h2>non stampo i colori</h2>
        @endif

        <!-- Questa variabile è stata dichiarata in testa alla pagina
         dentro il tag php -->
        <p>{{$testo}}</p>


    </div>
</body>

</html>