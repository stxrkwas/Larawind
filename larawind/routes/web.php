<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', function () {
    return view('contato');
});