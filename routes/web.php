<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntrarController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SalvosController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PublicacaoController;


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

//Route::get('/', function () {
   // return view('welcome');
//});

Auth::routes();

Route::get('/todas', [App\Http\Controllers\SiteController::class, 'index'])->name('site.index');

Route::get('/site/categoria/{id}', [App\Http\Controllers\SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/adm', [App\Http\Controllers\AdmController::class, 'index'])->name('adm');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/receita/{id}', [App\Http\Controllers\ReceitaController::class, 'show'])->name('receita');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

Route::get('/salvos', [App\Http\Controllers\SalvosController::class, 'index'])->name('salvos');

Route::get('/meuscomentarios', [App\Http\Controllers\ComentarioController::class, 'index'])->name('comentario');

Route::get('/entrar', [App\Http\Controllers\UserController::class, 'index'])->name('entrar');

Route::get('/cadastro', [App\Http\Controllers\CadastroController::class, 'index'])->name('cadastro');

Route::post('/comentario/create', [App\Http\Controllers\ComentarioController::class, 'store'])->name('comentario.create');

Route::post('/login_usuario', [App\Http\Controllers\UserController::class, 'login'])->name('login.usuario');

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout_usuario');

Route::post('/cadastrar_usuario', [App\Http\Controllers\UserController::class, 'cadastrar'])->name('cadastrar.usuario');

Route::get('/recuperarsenha', [App\Http\Controllers\RecuperarController::class, 'index'])->name('recuperar.senha');

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


       // -------------------------------CRUD PUBLICAÇÃO ----------------------------------------

    Route::get('/publicar', [App\Http\Controllers\PublicacaoController::class, 'index'])->name('formulario');

    Route::get('/publicacao/create', [App\Http\Controllers\PublicacaoController::class, 'create'])->name('publicacao.create');

    Route::post('/publicacao/create', [App\Http\Controllers\PublicacaoController::class, 'store'])->name('publicacao.store');

    Route::get('/publicacao/{id}', [App\Http\Controllers\PublicacaoController::class, 'show'])->name('publicacao.show');

    Route::get('/publicacao/{id}/edit', [App\Http\Controllers\PublicacaoController::class, 'edit'])->name('publicacao.edit');

    Route::put('/publicacao/{id}/edit', [App\Http\Controllers\PublicacaoController::class, 'update'])->name('publicacao.update');

    Route::delete('/publicacao/{id}', [App\Http\Controllers\PublicacaoController::class, 'destroy'])->name('publicacao.destroy');

    Route::get('/receitausuario', [App\Http\Controllers\PublicacaoController::class, 'indexUsuario'])->name('receita.usuario');

