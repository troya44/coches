<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coches', [CochesController::class, 'index'])->name('coches.index');
Route::get('/coche/{matricula}', [CochesController::class, 'mostrarCoche'])->name('mostrarCoche');
Route::get('/coches/create', [CochesController::class, 'create'])->name('coches.create');
Route::post('/coches', [CochesController::class, 'store'])->name('coches.store');
Route::delete('/coches/{matricula}', [CochesController::class, 'destroy'])->name('eliminar');



