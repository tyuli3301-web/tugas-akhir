<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosis', function() {
    return view('dosis');
} );
Route::get('/katalog', function() {
    return view('katalog');
} );
