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

Route::get('/', [PageController::class, 'index'])->name('index');

//-----------------------------------------HOMEPAGE-----------------------------------------------

//Route::get('/'.PAGE.'/products', [PageController::class, 'products'])->name(PAGE.'.products');

Route::get('/page/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('/page/about', [PageController::class, 'about'])->name('page.about');
Route::get('/page/index', [PageController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//----------------------------------------ORCAMENTO---------------------------------------------------

Route::get('/orcamento/create', [OrcamentoController::class, 'create'])->name('orcamento.create');
Route::post('/orcamento/create', [OrcamentoController::class, 'store'])->name('orcamento.store');
Route::get('/orcamento/create_pdf', [OrcamentoController::class, 'create_pdf'])->name('orcamento.create_pdf');

//----------------------------------------ORCAMENTO-------------------------------------------


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