<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//view accetta come primo parametro la view e poi un array associativo
Route::get('/', function () {

    //METODO 1 Creo data e passo data
    $data = [
        'title' => 'Titolo da variabile',
        'subtitle' => 'Sottotitolo da variabile',
    ];

    //var dump su laravel
    dump($data);
    //se voglio fare un dump and die
    //dd($data);

    //return view('home', $data);


    //METODO 2 DA USARE
    $title = 'Titolo da variabile';
    $subtitle = 'Sottotitolo da variabile';
    $name = 'Ugo';
    $surname = 'DeUghi';
    $colori = ['rosso', 'verde', 'blu', 'viola', 'giallo', 'azzurro'];
    $stampa_colori = true;
    //Oppure uso compact crea un array associativo con chiave => valore
    //dei nomi delle variabili che passo sotto forma di stringa e senza dollaro
    return view('home', compact('title', 'subtitle', 'colori', 'name', 'surname', 'stampa_colori'));
});

Route::get('/chi-siamo', function () { //l'url sarà ..../chi-siamo
    $user = [
        'name' => 'Ugo',
        'surname' => 'DeUghi',
        'age' => 26,
    ];
    // $colori = ['rosso', 'verde', 'blu', 'viola', 'giallo', 'azzurro'];
    $colori = [];
    $title = 'Pagina about us';
    return view('about', compact('title', 'user', 'colori'));
});
