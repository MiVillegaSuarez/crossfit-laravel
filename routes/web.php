<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/prueba', function(){
    // dd("Hola mundo");
    return view("holamundo");
});

