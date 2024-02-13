<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\CortosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\autores;



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

Route::get('creandolibro', [LibrosController::class, 'store'])->name('creandolibro');

Route::get('formulario', function () {

    return view('nuevolibro');
})->name('formulario');

Route::get('/listado/{libro}', [LibrosController::class, 'destroy'])->name('listado.destroy');

Route::get('/listado/modificar/{id}', [LibrosController::class, 'edit'])->name('listado.edit');

Route::put('/formulariomodificar', [LibrosController::class, 'update'])->name('modificandolibro');

//AUTORES

Route::resource('autores', autores::class);
Route::resource('libros', LibrosController::class);

Route::get('listado', [LibrosController::class, 'index'])->name('listado');
Route::get('cortos', [CortosController::class, 'index'])->name('cortos');
Route::get('cortos/{id}', [CortosController::class, 'show'])->name('cortosid');
Route::get('home', [HomeController::class, 'index'])->name('home');