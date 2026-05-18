<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dosis', function() {
    return view('dosis');
} )->name('dosis');
Route::get('/katalog', function() {
    return view('katalog');
} )->name('katalog');
