<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use Auth;

Auth::routes();

Route::get('/', function () {
    return view('PaginaPrincipal')->middleware('auth');
});

Route::get('/home', function () {
    return view('PaginaPrincipal')->middleware('auth');
});

Route::get('/Usuario', function () {
    return view('Usuario');
});

Route::get('/Administrador', function () {
    return view('Administrador');
});

//Enviar Datos
Route::post('enviarDatos', [DatosController::class, 'enviarDatos']);

//Mostrat Datos
Route::get('Listado', [DatosController::class, 'mostrarDatos']);

//Editar y Actualizar
Route::get('/Editar/{id}', [DatosController::class, 'editar']);
Route::post('/actualizarDatos', [DatosController::class, 'actualizar']);

//Eliminar Datos
Route::get('Eliminar/{id}', [DatosController::class, 'eliminar']);
Auth::routes();

