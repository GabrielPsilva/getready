<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CelularController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

/*Route::get('/', function () {
    //return view('welcome');
    return view('adminlte');
});*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');

//-----------------------------------------HOMEPAGE-----------------------------------------------

//Route::get('/'.PAGE.'/products', [PageController::class, 'products'])->name(PAGE.'.products');

Route::get('/page/contact', [PageController::class, 'contact'])->name('page.contact');

Route::get('/page/about', [PageController::class, 'about'])->name('page.about');

Route::get('/page/index', [PageController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

//----------------------------------------ORCAMENTO---------------------------------------------------

Route::get('/orcamento', [OrcamentoController::class, 'index'])->name('orcamento.index')->can('is_admin');

Route::get('/orcamento/create', [OrcamentoController::class, 'create'])->name('orcamento.create');

Route::post('/orcamento/create', [OrcamentoController::class, 'store'])->name('orcamento.store');

Route::get('/orcamento/create_pdf', [OrcamentoController::class, 'create_pdf'])->name('orcamento.create_pdf');

//----------------------------------------ORCAMENTO-------------------------------------------


//----------------------------------------CELULARES-------------------------------------------

Route::get('/celular', [CelularController::class, 'index'])->name('celular.index')->can('is_admin');

Route::get('/celular/create', [CelularController::class, 'create'])->name('celular.create')->can('is_admin');

Route::post('/celular/create', [CelularController::class, 'store'])->name('celular.store')->can('is_admin');

Route::get('/celular/{id}', [CelularController::class, 'show'])->name('celular.show')->can('is_admin');

Route::get('/celular/{id}/edit', [CelularController::class, 'edit'])->name('celular.edit')->can('is_admin');

Route::put('/celular/{id}', [CelularController::class, 'update'])->name('celular.update')->can('is_admin');

Route::delete('/celular/{id}', [CelularController::class, 'destroy'])->name('celular.destroy')->can('is_admin');

// ----------------------------------------- CELULARES --------------------------------------

Auth::routes();