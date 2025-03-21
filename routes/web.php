<?php

use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', 'ClienteControlador');
