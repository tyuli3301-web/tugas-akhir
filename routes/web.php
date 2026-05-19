<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return view('welcome');
} )->name('home');

Route::get('/dosis', function() {
    return view('dosis');
} )->name('dosis');
Route::get('/katalog', [ObatController::class, 'index'] )->name('katalog');
