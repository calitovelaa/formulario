<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('presentacion');
})->name('presentacion');

Route::get('/caracteristicas', function () {
    return view('caracteristicas');
})->name('caracteristicas');

Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');

Route::post('/guardarInformacion', [ProjectController::class, 'guardarInformacion'])->name('guardar.informacion');
