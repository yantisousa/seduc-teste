<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\LivrosController;
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

Route::get('/', [AlunosController::class, 'create']);
Route::post('/store', [AlunosController::class, 'store'])->name('alunos.store');
Route::get('/index', [AlunosController::class, 'index'])->name('alunos.index');
Route::get('/destroy/{id}', [AlunosController::class, 'destroy'])->name('alunos.destroy');

Route::get('/livros/create', [LivrosController::class, 'create'])->name('livros.create');
Route::get('/livros/index/{id}', [LivrosController::class, 'index'])->name('livros.index');
Route::post('/livros/store/{id}', [LivrosController::class, 'store'])->name('livros.store');
Route::get('/livros/show/{id}', [LivrosController::class, 'show'])->name('livros.show');
