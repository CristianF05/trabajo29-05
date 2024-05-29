<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/vista', [EstudianteController::class, 'index']); 

// Ruta para procesar el formulario de registro de estudiantes (POST)
Route::post('/guardar-estudiante', [EstudianteController::class, 'store'])->name('guardar.estudiante'); 