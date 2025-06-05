<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriasController;



Route::get('/', function () {
    return view("welcome");
});

// Route::get('/notas', function () {s
//     return view('notas');
// });

// Route::get('/matricula', function () {
//     return view('matricula');
// });

// Route::get('/contacto', function () {
//     return view('contacto');
// });

// Route::get('/editar_notas', function () {
//     return view('editar_notas');
// });

Route:: get('/mostar', [NotasController::class, 'index']);
Route:: get('/crear', [NotasController::class, 'crear']);
Route:: get('/editar', [NotasController::class, 'editar']);
Route:: get('/eliminar', [NotasController::class, 'eliminar']);

Route:: get('/materias/mostrar', [MateriasController::class, 'mostrar']);
Route:: get('/materias/eliminar', [MateriasController::class, 'eliminar']);
Route:: get('/materias/editar', [MateriasController::class, 'editar']);
