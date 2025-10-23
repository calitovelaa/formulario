<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/formulario', function () {
    return redirect()->back()->with('success', 'Formulario enviado correctamente');
})->name('formulario.store');
