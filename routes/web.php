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
Route::get('/admin', [ObatController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/tambah', [ObatController::class, 'adminCreate'])->name('admin.create');
Route::post('/admin/simpan', [ObatController::class, 'adminStore'])->name('admin.store');
Route::get('/admin/edit/{id}', [ObatController::class, 'adminEdit'])->name('admin.edit');
Route::post('/admin/update{id}', [ObatController::class, 'adminUpdate'])->name('admin.update');
Route::delete('/admin/hapus{id}', [ObatController::class, 'adminDestroy'])->name('admin.destroy');
