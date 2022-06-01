<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CelularController;
use App\Http\Controllers\OrcamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('adminlte');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----------------------------------------CELULARES-------------------------------------------

Route::get('/celular', [CelularController::class, 'index'])->name('celular.index');

Route::get('/celular/create', [CelularController::class, 'create'])->name('celular.create');
Route::post('/celular/create', [CelularController::class, 'store'])->name('celular.store');

Route::get('/celular/{id}', [CelularController::class, 'show'])->name('celular.show');

Route::get('/celular/{id}/edit', [CelularController::class, 'edit'])->name('celular.edit');
Route::put('/celular/{id}', [CelularController::class, 'update'])->name('celular.update');

Route::delete('/celular/{id}', [CelularController::class, 'destroy'])->name('celular.destroy');

// ----------------------------------------- CELULARES --------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');