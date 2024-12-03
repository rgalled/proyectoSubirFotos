<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirController;

Route::resource('subidos', SubirController::class);
Route::get('subir/{id}', [SubirController::class, 'show'])->name('subir.show');
Route::get('/', action: [SubirController::class, 'index']);
Route::get('archivos/table', [SubirController::class, 'table'])->name('archivos.table');
