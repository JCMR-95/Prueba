<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use Auth;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('PaginaPrincipal');
});

Route::get('/Usuario', function () {
    return view('Usuario');
});

Route::get('/Administrador', function () {
    return view('Administrador');
});

//¿Administrador o Usuario?
Route::post('verCargo', [DatosController::class, 'verCargo']);

//Enviar Datos
Route::post('enviarDatos', [DatosController::class, 'enviarDatos']);

//Mostrat Datos
Route::get('Listado', [DatosController::class, 'mostrarDatos']);

//Eliminar Datos
Route::get('Eliminar/{id}', [DatosController::class, 'eliminar']);
Auth::routes();

