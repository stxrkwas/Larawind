<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

/*Route::get('/contato', function () {
    return view('contato');
});*/

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/form', function () {
    return view('form');
});