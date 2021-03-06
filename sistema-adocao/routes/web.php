<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# Rota para mostrar os usuários do sistema 
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios')->middleware('auth');

# Rota para criar novos usuários do sistema 
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->name('usuarios')->middleware('auth');

# Rota para criar novos usuários do sistema 
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->name('usuarios')->middleware('auth');

# Rota para editar novos usuários do sistema 
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('usuarios')->middleware('auth');

# Rota para dar update novos usuários do sistema 
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios')->middleware('auth');

# Rota para dar update novos usuários do sistema 
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('usuarios')->middleware('auth');

# Rota para chegar na página de cadastrar os animais cadastrados no sistema 
Route::get('/animais/cadastrar', [App\Http\Controllers\AnimaisController::class, 'cadastrar'])->name('animais')->middleware('auth');

# Rota para mostrar os animais cadastrados do sistema 
Route::post('/animais', [App\Http\Controllers\AnimaisController::class, 'index'])->name('animais')->middleware('auth');

# Rota para add os animais cadastrados do sistema 
Route::post('/animais/add', [App\Http\Controllers\AnimaisController::class, 'add'])->name('animais')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::get('/informacoes', [App\Http\Controllers\InformacoesController::class, 'index'])->name('informacoes')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::post('/informacoes/insert', [App\Http\Controllers\InformacoesController::class, 'insert'])->name('informacoes')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::get('/informacoes/formulario', [App\Http\Controllers\InformacoesController::class, 'formulario'])->name('informacoes')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::get('/informacoes/formulario/edit', [App\Http\Controllers\InformacoesController::class, 'edit'])->name('informacoes')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::post('/informacoes/editja', [App\Http\Controllers\InformacoesController::class, 'editja'])->name('informacoes')->middleware('auth');

# Rota para direcionar para tela de completar informacoes adicionais
Route::get('/animais/excluir/{id}', [App\Http\Controllers\AnimaisController::class, 'excluir'])->name('animais')->middleware('auth');
