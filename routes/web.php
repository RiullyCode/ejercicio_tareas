<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tareas', [TareaController::class, 'listarTareas'])->name('listarTareas');
Route::post('/tareas', [TareaController::class, 'añadirTareas'])->name('añadirTareas');
Route::delete('/tareas/{id}', [TareaController::class, 'eliminarTarea'])->name('eliminarTarea');

