<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\TurmasController;
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
//ROTAS DE ALUNOS
Route::middleware('autenticador')->group(function(){
    Route::post('/store', [AlunosController::class, 'store'])->name('alunos.store');
    Route::get('/', [AlunosController::class, 'create'])->name('alunos.create');
    Route::get('/index', [AlunosController::class, 'index'])->name('alunos.index');
    Route::get('/destroy/{id}', [AlunosController::class, 'destroy'])->name('alunos.destroy');
    //ROTAS DE LIVROS
    Route::get('/livros/create', [LivrosController::class, 'create'])->name('livros.create');
    Route::get('/livros/index/{id}', [LivrosController::class, 'index'])->name('livros.index');
    Route::post('/livros/store/{id}', [LivrosController::class, 'store'])->name('livros.store');
    Route::get('/livros/show/{id}', [LivrosController::class, 'show'])->name('livros.show');
});
//ROTAS DE LOGIN/CADASTRO
Route::get('/professores/create', [ProfessoresController::class, 'create'])->name('professores.create');
Route::post('/professores/store', [ProfessoresController::class, 'store'])->name('professores.store');
Route::get('/login', [ProfessoresController::class, 'login'])->name('login');
Route::post('/login/create', [ProfessoresController::class, 'loginReturn'])->name('professores.login');
Route::get('/login/logout', [ProfessoresController::class, 'destroy'])->name('professores.destroy');

    //TURMAS

Route::get('/turmas/index', [TurmasController::class, 'index'])->name('turmas.index');
