<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario', function () {
    return view('usuario');
});

Route::post('/usuario', [UserController::class, "store"] )->name("usuario");

Route::get('/editar/{id}', [UserController::class, "edit"] )->name("editar.usuario");

Route::post('/update/{id}', [UserController::class, "update"] )->name("actualizar.usuario");

