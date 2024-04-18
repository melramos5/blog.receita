<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrarController;
use App\Http\Controllers\CadastroController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/adm', [App\Http\Controllers\AdmController ::class, 'index'])->name('adm');

Route::get('/inicio', [App\Http\Controllers\InicioController ::class, 'index'])->name('inicio');

Route::get('/massa', [App\Http\Controllers\MassaController ::class, 'index'])->name('massa');

Route::get('/entrar', [App\Http\Controllers\EntrarController ::class, 'index'])->name('entrar');

Route::get('/cadastro', [App\Http\Controllers\CadastroController ::class, 'index'])->name('cadastro');

    // -------------------------------CRUD CATEGORIA ----------------------------------------

    // LISTAR GET
    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

    //store
    Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

    // SHOW - GET
    Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

    // update
    Route::put('/categoria/{id}/edit', [CategoriaController::class, 'update'])->name('categoria.update');

    // DESTROY DELETE
    Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');


    // -------------------------------CRUD POSTAGEM ----------------------------------------

    // LISTAR GET
    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

    // CREATE GET / STORE POST
    // create
    Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');

    //store
    Route::post('/postagem/create', [PostagemController::class, 'store'])->name('postagem.store');

    // SHOW - GET
    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');

    // EDIT GET / UPDATE PUT
    // edit
    Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');

    // update
    Route::put('/postagem/{id}/edit', [PostagemController::class, 'update'])->name('postagem.update');

    // DESTROY DELETE
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');

